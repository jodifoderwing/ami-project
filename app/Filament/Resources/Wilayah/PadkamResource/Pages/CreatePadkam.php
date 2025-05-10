<?php

namespace App\Filament\Resources\Wilayah\PadkamResource\Pages;

use App\Filament\Resources\Wilayah\PadkamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePadkam extends CreateRecord
{
    protected static string $resource = PadkamResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
