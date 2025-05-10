<?php

namespace App\Filament\User\Resources\KinerjaResource\Pages;

use App\Filament\User\Resources\KinerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKinerjas extends ListRecords
{
    protected static string $resource = KinerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
