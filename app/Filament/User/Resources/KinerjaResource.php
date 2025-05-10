<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\KinerjaResource\Pages;
use App\Filament\User\Resources\KinerjaResource\RelationManagers;
use App\Models\Kinerja;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KinerjaResource extends Resource
{
    protected static ?string $model = Kinerja::class;

    protected static ?string $navigationIcon = 'akar-statistic-up';

    protected static ?string $navigationGroup = 'Sekretariat';

    protected static ?string $slug = 'sasaran-kinerja-perusahaan';

    protected static ?string $label = 'Sasaran Kinerja Perusahaan';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('NAMA KEGIATAN')
                    ->description('Program Kegiatan dalam satu tahun kalender')
                    ->aside()
                    ->schema([
                        Forms\Components\TextInput::make('tahun')
                            ->required()
                            ->label('TAHUN')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('kegiatan')
                            ->required()
                            ->label('KEGIATAN/PROGRAM')
                            ->maxLength(255),
                        Forms\Components\MarkdownEditor::make('deskripsi')
                            ->label('DESKRIPSI KEGIATAN')
                            ->required()
                            ->maxLength(255),
                    ])->compact(),
                Forms\Components\Section::make('SASARAN KINERJA')
                    ->description('Sasaran berupa target, capaian dan progress')
                    ->aside()
                    ->schema([
                        Forms\Components\TextInput::make('satuan')
                            ->label('SATUAN')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('target')
                            ->label('TARGET')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('nilai')
                            ->label('NILAI SATUAN')
                            ->numeric(),
                        Forms\Components\TextInput::make('tabel')
                            ->label('LINK TABEL')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('indikator')
                            ->label('INDIKATOR SELESAI')
                            ->maxLength(255),
                    ])->compact(),
                Forms\Components\Section::make('DASAR PELAKSANAAN KEGIATAN')
                    ->description('Surat Keputusan Melaksanakan Tugas')
                    ->aside()
                    ->schema([
                        Forms\Components\TextInput::make('nosk')
                            ->label('NO. SURAT KEPUTUSAN DIREKSI')
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('tglsk')
                            ->label('TANGGAL SURAT KEPUTUSAN DIREKSI')
                            ->date('d-m-Y'),
                    ])->compact(),
                Forms\Components\Section::make('PELAKSANA KEGIATAN')
                    ->description('Nama Koordinator dan Anggota')
                    ->aside()
                    ->schema([
                        Forms\Components\Select::make('koordinator')
                            ->label('KOORDINATOR')
                            ->required()
                            ->options(fn() => Pegawai::query()
                                ->orderBy('nama')
                                ->pluck('nama', 'nama')),
                        Forms\Components\Select::make('anggota')
                            ->label('ANGGOTA')
                            ->required()
                            ->multiple()
                            ->options(fn() => Pegawai::query()
                                ->orderBy('nama')
                                ->pluck('nama', 'nama')),
                    ])->compact(),

            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('tahun')
                //     ->label('TAHUN')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('kegiatan')
                    ->label('NAMA KEGIATAN')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('DESKRIPSI KEGIATAN (KAK)')
                    ->wrap()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('target')
                    ->label('TARGET')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nosk')
                    ->label('NO. SURAT KEPUTUSAN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tglsk')
                    ->label('TANGGAL')
                    ->date('d-m-Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('koordinator')
                    ->label('KOORDINATOR')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anggota')
                    ->label('ANGGOTA')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ], position: Tables\Enums\ActionsPosition::BeforeColumns)
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
            'index' => Pages\ListKinerjas::route('/'),
            'create' => Pages\CreateKinerja::route('/create'),
            'view' => Pages\ViewKinerja::route('/{record}'),
            'edit' => Pages\EditKinerja::route('/{record}/edit'),
        ];
    }
}
