<?php

namespace App\Filament\Resources\Wilayah\PadkamResource\Pages;

use App\Filament\Resources\Wilayah\PadkamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPadkam extends EditRecord
{
    protected static string $resource = PadkamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        return $this->getResource()::getUrl('index');
    }
}
