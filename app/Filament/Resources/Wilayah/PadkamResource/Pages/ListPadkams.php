<?php

namespace App\Filament\Resources\Wilayah\PadkamResource\Pages;

use App\Filament\Resources\Wilayah\PadkamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPadkams extends ListRecords
{
    protected static string $resource = PadkamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
