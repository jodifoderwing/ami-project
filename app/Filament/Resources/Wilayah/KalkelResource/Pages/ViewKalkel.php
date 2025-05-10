<?php

namespace App\Filament\Resources\Wilayah\KalkelResource\Pages;

use App\Filament\Resources\Wilayah\KalkelResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKalkel extends ViewRecord
{
    protected static string $resource = KalkelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
