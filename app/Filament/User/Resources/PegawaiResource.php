<?php

namespace App\Filament\User\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\User\Resources\PegawaiResource\Pages;
use App\Filament\User\Resources\PegawaiResource\RelationManagers;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    protected static ?string $navigationGroup = 'Sekretariat';

    protected static ?string $slug = 'data-pegawai';

    protected static ?string $label = 'Data Pegawai';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('DATA DIRI')
                    ->description('Pengisian data diri pegawai lengkap dan benar')
                    ->aside()
                    ->schema([
                        FileUpload::make('foto')
                            ->label('FOTO')
                            ->required()
                            ->avatar(),
                        TextInput::make('nama')
                            ->label('NAMA LENGKAP')
                            ->required()
                            ->maxLength(255),
                        // TextInput::make('nama_pd')
                        //     ->label('NAMA PARINGAN DALEM')
                        //     ->maxLength(255),
                        TextInput::make('nik')
                            ->label('NIK')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('tmp_lahir')
                            ->label('TEMPAT LAHIR')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('tgl_lahir')
                            ->label('TANGGAL LAHIR')
                            ->required(),
                        Textarea::make('alamat')
                            ->label('ALAMAT')
                            ->maxLength(255),
                        Select::make('agama_id')
                            ->relationship('agama', 'nama')
                            ->required()
                            ->label('AGAMA')
                            ->required(),
                        Select::make('genre')
                            ->options([
                                'laki-laki' => 'Laki-laki',
                                'perempuan' => 'Perempuan',
                            ])
                            ->label('JENIS KELAMIN')
                            ->required(),
                        TextInput::make('no_hp')
                            ->label('NOMOR HANDPHONE')
                            ->required(),
                        TextInput::make('email')
                            ->label('EMAIL'),
                    ])->compact(),
                Section::make('DATA PEKERJAAN')
                    ->description('Pengisian data pekerjaan sesuai dengan pelaksanaan tugas')
                    ->aside()
                    ->schema([
                        Select::make('pemkraton_id')
                            ->relationship('pemkraton', 'nama')
                            ->label('SATUAN KERJA')
                            ->required(),
                        Select::make('jabatan_id')
                            ->relationship('jabatan', 'nama')
                            ->label('JABATAN')
                            ->required(),
                    ])->compact(),
                Section::make('UPLOAD DOKUMEN')
                    ->description('Dokumen yang wajid diupload')
                    ->aside()
                    ->schema([
                        FileUpload::make('ktp')
                            ->label('UPLOAD KTP')
                            ->directory('pegawai_upload')
                            // ->multiple()
                            ->image()
                            ->imageEditor()
                            ->imageEditorViewportWidth('1920')
                            ->imageEditorViewportHeight('1080')
                            // ->panelLayout('grid')
                            ->openable()
                            ->downloadable(),
                    ])->compact(),
            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->label('FOTO')
                    ->circular(),
                TextColumn::make('nama')
                    ->label('NAMA LENGKAP')
                    ->searchable(),
                TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable(),
                TextColumn::make('tmp_lahir')
                    ->label('TMP. LAHIR')
                    ->searchable(),
                TextColumn::make('tgl_lahir')
                    ->label('TGL. LAHIR')
                    ->date('d F Y')
                    ->sortable(),
                TextColumn::make('pemkraton.nama')
                    ->label('SATUAN KERJA')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('no_hp')
                    ->label('NO. HANDPHONE')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
