<?php

namespace App\Filament\User\Resources\DisposisiResource\Pages;

use App\Filament\User\Resources\DisposisiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisposisi extends EditRecord
{
    protected static string $resource = DisposisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
