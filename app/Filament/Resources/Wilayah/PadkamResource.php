<?php

namespace App\Filament\Resources\Wilayah;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kalkel;
use App\Models\Kapkem;
use App\Models\Padkam;
use App\Models\Kabkota;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\Indicator;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Enums\FiltersLayout;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\PadkamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PadkamResource\RelationManagers;

class PadkamResource extends Resource
{
    protected static ?string $model = Padkam::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $label = 'Padukuhan / Kampung';

    protected static ?string $navigationGroup = 'Data Wilayah Administrasi';

    protected static ?string $slug = 'padukuhan-kampung';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Wilayah Administrasi')
                    ->aside()
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
                            ->options(fn(Get $get): Collection => Kapkem::query()
                                ->where('kabkota_id', $get('kabkota_id'))
                                ->pluck('nama', 'id'))
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(fn(Set $set) => $set('kalkel_id', null))
                            ->label('Kapanewon / Kemantren')
                            ->required(),
                        Select::make('kalkel_id')
                            ->options(fn(Get $get): Collection => Kalkel::query()
                                ->where('kapkem_id', $get('kapkem_id'))
                                ->pluck('nama', 'id'))
                            ->searchable()
                            ->preload()
                            ->live()
                            ->label('Kalurahan / Kelurahan')
                            ->required(),
                        Select::make('type')
                            ->options([
                                'PADUKUHAN' => 'PADUKUHAN',
                                'KAMPUNG' => 'KAMPUNG'
                            ])
                            ->label('Tipe')
                            ->required(),
                        TextInput::make('nama')
                            ->rule(function (Get $get, $record) {
                                $recordId = $record?->id;
                                if ($recordId === null) {
                                    $recordId = Padkam::count() + 1;
                                }
                                $kalkelId = $get('kalkel_id');
                                // dd($recordId);
                                return "unique:padkams,nama,{$recordId},id,kalkel_id,{$kalkelId}";  // Custom unique rule to check uniqueness in the context of the selected kalurahan
                            })
                            ->required(),
                    ])->compact(),
                Section::make('Data Kantor')
                    ->aside()
                    ->schema([
                        TextInput::make('Kantor')
                            ->label('Nama Kantor'),
                        TextArea::make('Alamat')
                            ->label('Alamat Kantor'),
                        TextInput::make('Koordinat')
                            ->label('Koordinat Posisi Kantor'),
                    ])->compact(),

            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('PADUKUHAN/KAMPUNG')
                    ->formatStateUsing(fn($record) => $record->type . ' ' . $record->nama)
                    ->searchable(),
                TextColumn::make('kalkel.nama')
                    ->label('KALURAHAN/KELURAHAN')
                    // ->formatStateUsing(function ($state, Padkam $padkam) {
                    //     return $padkam->kalkel->type . ' ' . $padkam->kalkel->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kalkel->type . ' ' . $record->kalkel->nama)
                    ->searchable(),
                TextColumn::make('kalkel.kapkem.nama')
                    ->label('KAPANEWON/KEMANTREN')
                    // ->formatStateUsing(function ($state, Padkam $padkam) {
                    //     return $padkam->kalkel->kapkem->type . ' ' . $padkam->kalkel->kapkem->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kapkem->type . ' ' . $record->kapkem->nama)
                    ->sortable(),
                TextColumn::make('kalkel.kapkem.kabkota.nama')
                    ->label('KABUPATEN/KOTA')
                    // ->formatStateUsing(function ($state, Padkam $padkam) {
                    //     return $padkam->kalkel->kapkem->kabkota->type . ' ' . $padkam->kalkel->kapkem->kabkota->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kabkota->type . ' ' . $record->kabkota->nama)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('d-m-Y')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime('d-m-Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('kabkota-kapkem-kalkel-filter')
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
                        Select::make('kalkel_id')
                            ->label('Filter by Kal/Kelurahan')
                            ->placeholder('Pilih Kal/Kelurahan')
                            ->options(function (Get $get) {
                                $kapkemId = $get('kapkem_id');
                                if ($kapkemId) {
                                    return Kalkel::where('kapkem_id', $kapkemId)->pluck('nama', 'id')->toArray();
                                }
                            }),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['kabkota_id'], function ($query) use ($data) {
                            return $query->where('kabkota_id', $data['kabkota_id']);
                        })->when($data['kapkem_id'], function ($query) use ($data) {
                            return $query->where('kapkem_id', $data['kapkem_id']);
                        })->when($data['kalkel_id'], function ($query) use ($data) {
                            return $query->where('kalkel_id', $data['kalkel_id']);
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
                        if ($data['kalkel_id'] ?? null) {
                            $kalkelNama = Kalkel::find($data['kalkel_id'])->nama;
                            $indicators[] = Indicator::make('KAL/KELURAHAN : ' . $kalkelNama)
                                ->removeField('kalkel_id');
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
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'asc')
            ->reorderable('id', 'asc');
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
            'index' => PadkamResource\Pages\ListPadkams::route('/'),
            'create' => PadkamResource\Pages\CreatePadkam::route('/create'),
            // 'view' => PadkamResource\Pages\ViewPadkam::route('/{record}'),
            'edit' => PadkamResource\Pages\EditPadkam::route('/{record}/edit'),
        ];
    }
}
