<?php

namespace App\Filament\Resources\Wilayah;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kalkel;
use App\Models\Kapkem;
use App\Models\Kabkota;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Gate;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\Indicator;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\KalkelResource\Pages;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KalkelResource\RelationManagers;

class KalkelResource extends Resource
{
    protected static ?string $model = Kalkel::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $label = 'Kalurahan / Kelurahan';

    protected static ?string $navigationGroup = 'Data Wilayah Administrasi';

    protected static ?string $slug = 'kalurahan-kelurahan';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Wilayah Administrasi')
                    ->aside()
                    ->compact()
                    ->schema([
                        Select::make('kabkota_id')
                            ->relationship('kabkota', titleAttribute: 'nama')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(fn(Set $set) => $set('kapkem_id', null))
                            ->label('Kabupaten / Kota')
                            ->required(),
                        Select::make('kapkem_id')
                            // ->options(fn(Get $get): Collection => Kapkem::query()
                            //     ->where('kabkota_id', $get('kabkota_id'))
                            //     ->pluck('nama', 'id'))
                            ->options(function (Forms\Get $get) {
                                return Kapkem::where('kabkota_id', $get('kabkota_id'))->pluck('nama', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->live()
                            ->label('Kapanewon / Kemantren')
                            ->required(),
                        Select::make('type')
                            ->options([
                                'KALURAHAN' => 'KALURAHAN',
                                'KELURAHAN' => 'KELURAHAN'
                            ])
                            ->label('Tipe')
                            ->required(),
                        TextInput::make('nama')
                            ->rule(function (Get $get, $record) {
                                $recordId = $record?->id;
                                if ($recordId === null) {
                                    $recordId = Kalkel::count() + 1;
                                }
                                $kapkemId = $get('kapkem_id');
                                // dd($recordId);
                                return "unique:kalkels,nama,{$recordId},id,kapkem_id,{$kapkemId}";  // Custom unique rule to check uniqueness in the context of the selected province
                            })
                            ->required()
                            ->maxLength(255),
                    ])->compact(),
                Section::make('Data Kantor')
                    ->aside()
                    ->compact()
                    ->schema([
                        TextInput::make('Kantor')
                            ->label('Nama Kantor'),
                        TextArea::make('Alamat')
                            ->label('Alamat Kantor'),
                        TextInput::make('Koordinat')
                            ->label('Koordinat Posisi Kantor'),
                        TextInput::make('npk')
                            ->label('Nomor Persil Kekancingan (NPK)')
                            ->numeric(),
                    ])

            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('KALURAHAN/KELURAHAN')
                    ->formatStateUsing(fn($record) => $record->type . ' ' . $record->nama)
                    ->searchable(),
                TextColumn::make('padkam.nama')
                    ->label('PADUKUHAN/KAMPUNG')
                    ->badge()
                    ->wrap(),
                TextColumn::make('padkam_count')->counts('padkam')
                    ->label('JUMLAH')
                    ->sortable(),
                TextColumn::make('kapkem.nama')
                    ->label('KAPANEWON / KEMANTREN')
                    // ->formatStateUsing(function ($state, Kalkel $kalkel) {
                    //     return $kalkel->kapkem->type . ' ' . $kalkel->kapkem->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kapkem->type . ' ' . $record->kapkem->nama)
                    ->searchable(),
                TextColumn::make('kapkem.kabkota.nama')
                    ->label('KABUPATEN / KOTA')
                    // ->formatStateUsing(function ($state, Kalkel $kalkel) {
                    //     return $kalkel->kapkem->kabkota->type . ' ' . $kalkel->kapkem->kabkota->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kabkota->type . ' ' . $record->kabkota->nama)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y H:i:s')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime('d-m-Y H:i:s')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('kabkota-kapkem-filter')
                    ->form([
                        Select::make('kabkota_id')
                            ->label('Filter by Kab/Kota')
                            ->placeholder('Pilih Kab/Kota')
                            ->options(
                                Kabkota::pluck('nama', 'id')->toArray(),
                            ),
                        Select::make('kapkem_id')
                            ->label('Filter by Kapanewon/Kecamatan')
                            ->placeholder('Pilih Kapanewon/Kecamatan')
                            ->options(function (Get $get) {
                                $kabkotaId = $get('kabkota_id');
                                if ($kabkotaId) {
                                    return Kapkem::where('kabkota_id', $kabkotaId)->pluck('nama', 'id')->toArray();
                                }
                            }),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['kabkota_id'], function ($query) use ($data) {
                            return $query->where('kabkota_id', $data['kabkota_id']);
                        })->when($data['kapkem_id'], function ($query) use ($data) {
                            return $query->where('kapkem_id', $data['kapkem_id']);
                        });
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['kabkota_id'] ?? null) {
                            $kabkotaNama = Kabkota::find($data['kabkota_id'])->nama;
                            $indicators[] = Indicator::make('KAB/KOTA : ' . $kabkotaNama)
                                ->removeField('kabkota_id');
                        }

                        if ($data['kapkem_id'] ?? null) {
                            $kapkemNama = Kapkem::find($data['kapkem_id'])->nama;
                            $indicators[] = Indicator::make('KAP/KEMANTREN : ' . $kapkemNama)
                                ->removeField('kapkem_id');
                        }

                        return $indicators;
                    }),
            ], layout: FiltersLayout::Modal)
            ->filtersTriggerAction(
                fn(Action $action) => $action
                    ->button()
                    ->label('Filter'),
            )

            ->actions([
                Tables\Actions\EditAction::make(),
            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('id', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => KalkelResource\Pages\ListKalkels::route('/'),
            'create' => KalkelResource\Pages\CreateKalkel::route('/create'),
            // 'view' => KalkelResource\Pages\ViewKalkel::route('/{record}'),
            'edit' => KalkelResource\Pages\EditKalkel::route('/{record}/edit'),
        ];
    }
}
