<?php

namespace App\Filament\Resources\Wilayah;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kapkem;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\KapkemResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KapkemResource\RelationManagers;

class KapkemResource extends Resource
{
    protected static ?string $model = Kapkem::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $label = 'Kapanewon / Kemantren';

    protected static ?string $navigationGroup = 'Data Wilayah Administrasi';

    protected static ?string $slug = 'kapanewon-kemantren';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Wilayah Administrasi')
                    ->aside()
                    ->compact()
                    ->schema([
                        Select::make('kabkota_id')
                            ->relationship('kabkota', 'nama')
                            ->label('Kabupaten/Kota')
                            ->required(),
                        select::make('type')
                            ->options([
                                'KAPANEWON' => 'KAPANEWON',
                                'KEMANTREN' => 'KEMANTREN'
                            ])
                            ->label('Tipe')
                            ->required(),
                        TextInput::make('nama')
                            ->rule(function (Get $get, $record) {
                                $recordId = $record?->id;
                                if ($recordId === null) {
                                    $recordId = Kapkem::count() + 1;
                                }
                                $kabkotaId = $get('kabkota_id');
                                // dd($recordId);
                                return "unique:kapkems,nama,{$recordId},id,kabkota_id,{$kabkotaId}";
                            })
                            ->required(),
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
                TextColumn::make('nama')
                    ->label('KAPANEWON/KEMANTREN')
                    ->formatStateUsing(fn($record) => $record->type . ' ' . $record->nama)
                    ->searchable(),
                TextColumn::make('Kalkel.nama')
                    ->label('KALURAHAN/KELURAHAN')
                    ->badge()
                    ->wrap(),
                TextColumn::make('kalkel_count')->counts('kalkel')
                    ->label('JUMLAH'),
                TextColumn::make('kabkota.nama')
                    ->label('KABUPATEN/KOTA')
                    // ->formatStateUsing(function ($state, Kapkem $kapkem) {
                    //     return $kapkem->kabkota->type . ' ' . $kapkem->kabkota->nama;
                    // })
                    ->getStateUsing(fn($record) => $record->kabkota->type . ' ' . $record->kabkota->nama)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime('d-m-Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => KapkemResource\Pages\ListKapkems::route('/'),
            'create' => KapkemResource\Pages\CreateKapkem::route('/create'),
            'edit' => KapkemResource\Pages\EditKapkem::route('/{record}/edit'),
        ];
    }
}
