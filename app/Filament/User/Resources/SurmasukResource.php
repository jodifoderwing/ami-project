<?php

namespace App\Filament\User\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Surmasuk;
use Filament\Forms\Form;
use App\Models\Disposisi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\User\Resources\SurmasukResource\Pages;
use App\Filament\User\Resources\SurmasukResource\RelationManagers;
use Filament\Notifications\Notification as NotificationsNotification;
use App\Filament\User\Resources\SurmasukResource\RelationManagers\DisposisiRelationManager;

class SurmasukResource extends Resource
{
    protected static ?string $model = Surmasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope-open';

    protected static ?string $navigationGroup = 'Sekretariat';

    protected static ?string $slug = 'surat-masuk';

    protected static ?string $navigationLabel = 'Surat Masuk';

    protected static ?string $modelLabel = 'Surat Masuk';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('AGENDA SURAT MASUK')
                    ->description('Pembukuan pada Daftar Agenda surat masuk')
                    ->aside()
                    ->schema([
                        TextInput::make('no_surmas')
                            ->label('NOMOR')
                            ->disabled() // Nonaktifkan input agar tidak bisa diubah
                            ->visible(fn($record) => $record && $record->no_surmas) // Tampilkan hanya jika sudah ada
                            ->numeric(),
                        DatePicker::make('tgl_surmas')
                            ->label('TANGGAL')
                            ->date('d-m-Y')
                            ->required()
                            ->default(now()),
                    ])->columns(2)->compact(),

                Section::make('DATA SURAT MASUK')
                    ->description('Pengisian data surat masuk')
                    ->aside()
                    ->schema([
                        TextInput::make('no_surat')
                            ->label('NOMOR SURAT')
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('tgl_surat')
                            ->label('TANGGAL SURAT')
                            ->required(),
                        TextArea::make('nama_pengirim')
                            ->label('PENGIRIM SURAT')
                            ->required()
                            // ->rows(3)
                            ->maxLength(255),
                        TextArea::make('perihal')
                            ->label('PERIHAL')
                            ->required()
                            // ->rows(3)
                            ->maxLength(255),
                    ])->compact(),

                Section::make('UPLOAD DOKUMEN')
                    ->description('Upload dokumen Format PDF')
                    ->aside()
                    ->schema([
                        FileUpload::make('dok_arsip')
                            ->label('UNGGAH SURAT MASUK')
                            ->directory('surat_masuk')
                            ->acceptedFileTypes(['application/pdf'])
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull()
                            ->removeUploadedFileButtonPosition('right')
                            ->uploadButtonPosition('left')
                            ->uploadingMessage('Uploading ...'),
                    ])->compact(),

                Section::make('KETERANGAN')
                    ->description('Pengisian data keterang seperti sifat surat penting/rahasia atau keterangan lainnya')
                    ->aside()
                    ->schema([
                        Textarea::make('ket')
                            ->label('KETERANGAN')
                            ->maxLength(255),
                    ])->compact(),
            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_surmas')
                    ->label('NO.')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tgl_surmas')
                    ->label('TGL. REGISTER')
                    ->date('d F Y')
                    ->sortable(),
                TextColumn::make('no_surat')
                    ->label('NO. SURAT')
                    ->searchable(),
                TextColumn::make('tgl_surat')
                    ->label('TGL. SURAT')
                    ->date('d F Y')
                    ->sortable(),
                TextColumn::make('nama_pengirim')
                    ->wrap()
                    ->label('PENGIRIM')
                    ->searchable(),
                TextColumn::make('perihal')
                    ->label('PERIHAL')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('status')
                    ->label('STATUS')
                    ->color(function ($record) {
                        $dispo = Disposisi::where('surmasuk_id', $record->id)->first();
                        if ($dispo) {
                            $color = 'success';
                            return $color;
                        }
                    })
                    // ->badge()
                    ->searchable(),
                TextColumn::make('disposisi.pegawai.nama')
                    ->label('Disposisi')
                    ->badge(),
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

                Tables\Actions\Action::make('Dispo')
                    ->icon('heroicon-o-building-library')
                    ->action(function ($record) {
                        $dispo = Disposisi::where('surmasuk_id', $record->id)->first();
                        // dd($dispo->pegawai->nama);
                        if ($dispo) {
                            $record->status = 'disposisi';
                            $record->save();
                        } else {
                            Notification::make()->danger()->title('Disposisi ke Petugas belum dilakukan')->send();
                        }
                    })
                    ->visible(fn($record) => $record->status === 'register'),
            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc')
            ->reorderable('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            DisposisiRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSurmasuks::route('/'),
            'create' => Pages\CreateSurmasuk::route('/create'),
            'edit' => Pages\EditSurmasuk::route('/{record}/edit'),
        ];
    }
}
