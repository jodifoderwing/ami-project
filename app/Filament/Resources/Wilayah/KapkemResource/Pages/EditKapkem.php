<?php

namespace App\Filament\Resources\Wilayah\KapkemResource\Pages;

use App\Filament\Resources\Wilayah\KapkemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKapkem extends EditRecord
{
    protected static string $resource = KapkemResource::class;

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
