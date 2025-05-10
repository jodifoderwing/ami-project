<?php

namespace App\Filament\User\Resources\PegawaiResource\Pages;

use App\Filament\User\Resources\PegawaiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePegawai extends CreateRecord
{
    protected static string $resource = PegawaiResource::class;

    protected static bool $canCreateAnother = false;
}
