<?php

namespace App\Filament\User\Resources\KinerjaResource\Pages;

use App\Filament\User\Resources\KinerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKinerja extends EditRecord
{
    protected static string $resource = KinerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
