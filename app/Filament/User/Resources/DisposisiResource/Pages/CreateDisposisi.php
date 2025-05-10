<?php

namespace App\Filament\User\Resources\DisposisiResource\Pages;

use App\Filament\User\Resources\DisposisiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDisposisi extends CreateRecord
{
    protected static string $resource = DisposisiResource::class;

    protected static bool $canCreateAnother = false;
}
