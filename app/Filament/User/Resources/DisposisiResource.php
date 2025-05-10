<?php

namespace App\Filament\User\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Surmasuk;
use Filament\Forms\Form;
use App\Models\Disposisi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Actions\StaticAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\User\Resources\DisposisiResource\Pages;
use App\Filament\User\Resources\DisposisiResource\RelationManagers;

class DisposisiResource extends Resource
{
    protected static ?string $model = Disposisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-right-start-on-rectangle';

    protected static ?string $navigationGroup = 'Sekretariat';

    protected static ?string $slug = 'disposisi';

    protected static ?string $label = 'Disposisi';

    protected static ?int $navigationSort = 3;

    // Filament 3.x supported with new fresh api
    public static function canCreate(): bool
    {
        return false;
    }


    public static function form(Form $form): Form
    {
        // $disposisi =  $form->getRecord();
        // $surmasukId = $disposisi->surmasuk_id;
        // $surmasuk = \App\Models\Surmasuk::find($surmasukId);
        // dd($surmasuk->no_surmas);
        return $form
            ->schema([
                Section::make('AGENDA SURAT MASUK')
                    ->aside()
                    ->schema([
                        TextInput::make('no_surmas')
                            ->label('Nomor Agenda')
                            ->placeholder(function (Get $get, Set $set) {
                                $id = $get('surmasuk_id');
                                // dd($id);
                                $surmasuk = Surmasuk::find($id);
                                //dd($surmasuk);
                                $set('no_surmas', $surmasuk->no_surmas);
                                $set('tgl_surmas', $surmasuk->tgl_surmas);
                                $set('no_surat', $surmasuk->no_surat);
                                $set('tgl_surat', $surmasuk->tgl_surat);
                                $set('nama_pengirim', $surmasuk->nama_pengirim);
                                $set('perihal', $surmasuk->perihal);
                                $set('ket', $surmasuk->ket);
                            })
                            ->disabled(),
                        DatePicker::make('tgl_surmas')
                            ->label('Tanggal Agenda')
                            ->disabled(),
                    ])->columns(2)->compact(),
                Section::make('DATA SURAT MASUK')
                    ->aside()
                    ->schema([
                        TextInput::make('no_surat')
                            ->label('Nomor Surat')
                            ->disabled(),
                        DatePicker::make('tgl_surat')
                            ->label('Tanggal Surat')
                            ->disabled(),
                        TextArea::make('nama_pengirim')
                            ->label('Nama Pengirim Surat')
                            ->disabled(),
                        TextArea::make('perihal')
                            ->label('Perihal Surat')
                            ->disabled(),
                        TextArea::make('ket')
                            ->label('Keterangan/Catatan')
                            ->disabled(),

                        Actions::make([
                            Action::make('surmasuk')
                                ->label('Lihat Surat')
                                ->icon('heroicon-o-paper-clip')
                                ->action(function (Get $get) {
                                    $surmasuk_id = $get('surmasuk_id');
                                    $surmasuk = Surmasuk::find($surmasuk_id);
                                    $target = $surmasuk->dok_arsip;

                                    // Mendapatkan URL file
                                    $fileUrl = Storage::url($target);
                                    $filePath = storage_path('app/public/' . $target);

                                    // dd($fileUrl);
                                    if (!file_exists($filePath)) {
                                        return response()->json(['message' => 'File not found.'], 404);
                                    }

                                    // return redirect()->away($fileUrl);
                                    return redirect()->away($fileUrl);
                                }),
                        ]),

                    ])->compact(),
                Section::make('DISPOSISI PENGHAGENG')
                    ->aside()
                    ->schema([
                        Textarea::make('arahan')
                            ->label('Arahan Penghageng')
                            ->disabled(),
                        DatePicker::make('tgl_dispo')
                            ->label('Tanggal Dispo')
                            ->disabled(),
                        Select::make('pegawai_id')
                            ->relationship('pegawai', 'nama')
                            ->label('Nama Pegawai')
                            ->disabled(),
                        DatePicker::make('tgl_terima')
                            ->date('d-m-Y')
                            ->label('Tanggal Terima')
                            ->disabled(),
                    ])->compact(),

                Section::make('TINDAK LANJUT')
                    ->aside()
                    ->schema([
                        MarkdownEditor::make('catatan')
                            ->columnSpanFull(),
                        FileUpload::make('upload_foto')
                            ->label('Upload Foto')
                            ->multiple()
                            ->image()
                            ->imageEditor()
                            // ->imageEditorViewportWidth('1920')
                            // ->imageEditorViewportHeight('1080')
                            ->disk('public')
                            ->directory('foto_dispo')
                            ->panelLayout('grid')
                            ->openable()
                            ->downloadable(),
                        FileUpload::make('upload_dokumen')
                            ->label('Upload Dokumen')
                            ->multiple()
                            ->acceptedFileTypes(['application/pdf'])
                            ->uploadingMessage('Uploading dokumen...')
                            ->disk('public')
                            ->directory('dokumen_dispo')
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull(),
                        // DatePicker::make('tgl_selesai')
                        //     ->label('Tanggal Selesai'),

                        Actions::make([
                            Action::make('selesai')
                                ->label('Selesai')
                                ->icon('heroicon-o-document-check')
                                ->action(function ($record) {
                                    $surmasuk = Surmasuk::where('id', $record->surmasuk_id)->first();

                                    $status = $surmasuk->status;
                                    // dd($status);

                                    if ($status === 'diterima') {
                                        $surmasuk->status = 'selesai';
                                        $surmasuk->save();
                                    }

                                    if ($record->status === 'diterima') {
                                        $record->status = 'selesai';
                                        $record->tgl_selesai = now();
                                        $record->save();
                                        Notification::make()->danger()->title('Disposisi sudah selesai dilaksanakan')->send();
                                    } else {
                                        Notification::make()->danger()->title('Disposisi belum dilakukan')->send();
                                    }
                                })
                                ->disabled(fn($record) => $record->status != 'diterima'),
                        ]),

                    ])->compact(),

            ])->inlineLabel();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('surmasuk.no_surat')
                    ->label('NO. SURAT')
                    ->sortable(),
                TextColumn::make('surmasuk.tgl_surat')
                    ->label('TGL. SURAT')
                    ->date('d-m-Y')
                    ->sortable(),
                TextColumn::make('surmasuk.nama_pengirim')
                    ->label('PENGIRIM')
                    ->wrap()
                    ->searchable(),
                TextColumn::make('surmasuk.perihal')
                    ->label('PERIHAL')
                    ->wrap()
                    ->searchable(),
                // TextColumn::make('arahan')
                //     ->label('ARAHAN')
                //     ->wrap()
                //     ->searchable(),
                TextColumn::make('tgl_dispo')
                    ->label('TGL. DISPO')
                    ->date('d-m-Y')
                    ->sortable(),
                TextColumn::make('pegawai.nama')
                    ->label('NAMA')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('STATUS')
                    ->badge()
                    ->sortable(),
                TextColumn::make('tgl_selesai')
                    ->label('TGL. SELESAI')
                    ->date('d-m-Y')
                    ->sortable(),
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
                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->disabled(fn($record) => $record->status === 'disposisi'),

                Tables\Actions\Action::make('Diterima')
                    ->icon('heroicon-o-building-library')
                    ->action(function ($record) {
                        $surmasuk = Surmasuk::where('id', $record->surmasuk_id)->first();

                        $status = $surmasuk->status;
                        // dd($status);

                        if ($status === 'disposisi') {
                            $surmasuk->status = 'diterima';
                            $surmasuk->save();
                        }

                        if ($record->status === 'disposisi') {
                            $record->status = 'diterima';
                            $record->tgl_terima = now();
                            $record->save();
                            // $this->dispatch('refreshComponent');
                            Notification::make()->danger()->title('Disposisi sudah diterima')->send();
                        } else {
                            Notification::make()->danger()->title('Disposisi belum dilakukan')->send();
                        }
                    })
                    ->after(function (StaticAction $action, $livewire) {
                        $livewire->dispatch('refresh-disposisi');
                    })
                    ->visible(fn($record) => $record->status === 'disposisi'),

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
            'index' => Pages\ListDisposisis::route('/'),
            'create' => Pages\CreateDisposisi::route('/create'),
            'edit' => Pages\EditDisposisi::route('/{record}/edit'),
        ];
    }
}
