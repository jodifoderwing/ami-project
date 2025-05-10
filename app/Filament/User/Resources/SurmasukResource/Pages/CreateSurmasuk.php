<?php

namespace App\Filament\User\Resources\SurmasukResource\Pages;

use Filament\Actions;
use App\Models\Counterno;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\User\Resources\SurmasukResource;

class CreateSurmasuk extends CreateRecord
{
    protected static string $resource = SurmasukResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Mengambil nomor berdasarkan kode dan tahun saat ini
        // dd($data);

        $data['no_surmas'] = Counterno::noCounter('SURAT-MASUK', date('Y'));

        return $data;
    }

    protected function afterCreate(): void
    {
        $this->dispatch('refreshComponent');
    }
}
