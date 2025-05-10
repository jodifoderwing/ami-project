<?php

namespace App\Filament\Resources\Wilayah\KabkotaResource\Pages;

use App\Filament\Resources\Wilayah\KabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKabkota extends EditRecord
{
    protected static string $resource = KabkotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
