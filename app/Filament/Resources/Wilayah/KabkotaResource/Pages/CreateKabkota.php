<?php

namespace App\Filament\Resources\Wilayah\KabkotaResource\Pages;

use App\Filament\Resources\Wilayah\KabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKabkota extends CreateRecord
{
    protected static string $resource = KabkotaResource::class;

    /**
     * @return array<Action | ActionGroup>
     */
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
