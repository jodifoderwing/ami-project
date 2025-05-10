<?php

namespace App\Filament\Resources\Wilayah\KapkemResource\Pages;

use App\Filament\Resources\Wilayah\KapkemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKapkem extends CreateRecord
{
    protected static string $resource = KapkemResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
