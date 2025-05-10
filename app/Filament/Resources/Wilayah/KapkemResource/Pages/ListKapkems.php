<?php

namespace App\Filament\Resources\Wilayah\KapkemResource\Pages;

use App\Filament\Resources\Wilayah\KapkemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKapkems extends ListRecords
{
    protected static string $resource = KapkemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
