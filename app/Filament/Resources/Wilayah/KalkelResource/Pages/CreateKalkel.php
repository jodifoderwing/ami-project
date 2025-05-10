<?php

namespace App\Filament\Resources\Wilayah\KalkelResource\Pages;

use App\Filament\Resources\Wilayah\KalkelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKalkel extends CreateRecord
{
    protected static string $resource = KalkelResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
