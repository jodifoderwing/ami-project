<?php

namespace App\Filament\Resources\Wilayah\KalkelResource\Pages;

use App\Filament\Resources\Wilayah\KalkelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKalkels extends ListRecords
{
    protected static string $resource = KalkelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
