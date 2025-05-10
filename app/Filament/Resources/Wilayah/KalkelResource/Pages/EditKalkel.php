<?php

namespace App\Filament\Resources\Wilayah\KalkelResource\Pages;

use App\Filament\Resources\Wilayah\KalkelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKalkel extends EditRecord
{
    protected static string $resource = KalkelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    // protected function getRedirectUrl(): ?string
    // {
    //     return $this->getResource()::getUrl('index');
    // }
}
