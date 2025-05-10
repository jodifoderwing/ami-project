<?php

namespace App\Filament\User\Resources\SurmasukResource\Pages;

use App\Filament\User\Resources\SurmasukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSurmasuk extends EditRecord
{
    protected static string $resource = SurmasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getContentTabLabel(): ?string
    {
        return 'Surat Masuk';
    }

    public function hasCombinedRelationManagerTabsWithContent(): bool
    {
        return true;
    }
}
