<?php

namespace App\Filament\Resources\Wilayah;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kapkem;
use App\Models\Kabkota;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\KabkotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KabkotaResource\RelationManagers;

class KabkotaResource extends Resource
{
    protected static ?string $model = Kabkota::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $label = 'Kabupaten / Kota';

    protected static ?string $navigationGroup = 'Data Wilayah Administrasi';

    protected static ?string $slug = 'kabupaten-kota';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Wilayah Administrasi')
                    ->aside()
                    ->compact()
                    ->schema([
                        select::make('type')
                            ->options([
                                'KABUPATEN' => 'KABUPATEN',
                                'KOTA' => 'KOTA',
                            ])
                            ->required(),
                        TextInput::make('nama')
                            ->required()
                            ->unique(ignoreRecord: true)  // Ensures unique validation while ignoring the current record
                            ->maxLength(255),
                    ]),
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
                    ])
            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('NO.')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nama')
                    ->label('KABUPATEN/KOTA')
                    ->formatStateUsing(fn($record) => $record->type . ' ' . $record->nama)
                    ->searchable(),
                TextColumn::make('kapkem.nama')
                    ->label('KAPANEWON/KEMATREN')
                    ->wrap()
                    ->badge(),
                TextColumn::make('kapkem_count')->counts('kapkem')
                    ->label('JUMLAH KAP/KEM')
                    ->alignEnd(),
                TextColumn::make('kalkel_count')->counts('kalkel')
                    ->label('JUMLAH KAL/KEL')
                    ->alignEnd(),
                TextColumn::make('padkam_count')->counts('padkam')
                    ->label('JUMLAH PAD/KAM')
                    ->alignEnd(),
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime('d F Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    // ->hiddenLabel()
                    ->label('Detail')
                    ->tooltip('Edit'),
                // Action::make('Detail')
                //     ->icon('heroicon-o-building-library')
                //     ->url(function ($record) {
                //         $kabkotaId = $record->id;
                //         // $kapkems = Kapkem::where('kabkota_id', $record->id)->get();
                //         // dd($kapkems);
                //         // Arahkan ke halaman state dengan filter berdasarkan country_id
                //         return route(
                //             'filament.admin.resources.kapanewon-kemantren.index',
                //             compact('kabkotaId')
                //         );
                //     }),

            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => KabkotaResource\Pages\ListKabkotas::route('/'),
            'create' => KabkotaResource\Pages\CreateKabkota::route('/create'),
            'edit' => KabkotaResource\Pages\EditKabkota::route('/{record}/edit'),
        ];
    }
}
