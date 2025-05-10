<?php

namespace App\Filament\User\Resources\SurmasukResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class DisposisiRelationManager extends RelationManager
{
    protected static string $relationship = 'disposisi';

    // protected static ?string $modelLabel = 'Disposisi';

    public function form(Form $form): Form
    {
        // $surmasuk = \App\Models\Surmasuk::find(request('surmasuk_id'));
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('pegawai_id')
                            ->label('Disposisi kepada')
                            ->relationship('pegawai', 'nama')
                            ->required(),
                        TextInput::make('arahan')
                            ->label('Arahan Pengageng'),
                        DatePicker::make('tgl_dispo')
                            ->label('Tanggal Disposisi')
                            ->default(now())
                            ->required(),
                        // MarkdownEditor::make('catatan')
                        //     ->label('Hasil Pelaksanaan')
                        //     ->columnSpanFull(),
                        // FileUpload::make('upload_dokumen')
                        //     ->label('Dokumen Hasil Pelaksanaan')
                        //     ->acceptedFileTypes(['application/pdf'])
                        //     ->disk('public')
                        //     ->directory('dokumen_dispo')
                        //     ->openable(),
                        // FileUpload::make('upload_foto')
                        //     ->label('Foto Hasil Pelaksanaan')
                        //     ->image()
                        //     ->multiple()
                        //     ->disk('public')
                        //     ->directory('foto_dispo')
                        //     ->panelLayout('grid')
                        //     ->openable(),
                    ])->compact()
            ])->inlineLabel();
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('surmasuk_id')
            ->columns([
                TextColumn::make('pegawai.nama')
                    ->label('Nama'),
                TextColumn::make('tgl_dispo')
                    ->label('Tanggal Disposisi')
                    ->date('d F Y'),
                TextColumn::make('arahan')
                    ->label('Arahan Penghageng'),
                TextColumn::make('tgl_terima')
                    ->label('Tanggal Terima')
                    ->date('d F Y'),
                TextColumn::make('tgl_selesai')
                    ->label('Tanggal Selesai')
                    ->date('d F Y'),
                ImageColumn::make('upload_foto')
                    ->label('FOTO'),
                // TextColumn::make('upload_dokumen')
                //     ->label('DOKUMEN')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ], position: ActionsPosition::BeforeColumns)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
