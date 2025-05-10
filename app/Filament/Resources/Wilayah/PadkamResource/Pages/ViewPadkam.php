<?php

namespace App\Filament\Resources\Wilayah\PadkamResource\Pages;

use App\Filament\Resources\Wilayah\PadkamResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPadkam extends ViewRecord
{
    protected static string $resource = PadkamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
