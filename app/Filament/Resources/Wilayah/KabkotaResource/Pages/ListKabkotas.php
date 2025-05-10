<?php

namespace App\Filament\Resources\Wilayah\KabkotaResource\Pages;

use App\Filament\Resources\Wilayah\KabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKabkotas extends ListRecords
{
    protected static string $resource = KabkotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
