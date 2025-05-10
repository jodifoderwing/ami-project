<?php

namespace App\Filament\User\Resources\SurmasukResource\Pages;

use Filament\Actions;
use App\Models\Surmasuk;
use Livewire\Attributes\On;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\User\Resources\SurmasukResource;

class ListSurmasuks extends ListRecords
{
    protected static string $resource = SurmasukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    #[On('refresh-disposisi')]
    public function getTabs(): array
    {
        return [
            'register' => Tab::make('Register')
                ->badge(Surmasuk::query()->where('status', 'register')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'register')),
            'disposisi' => Tab::make('Disposisi')
                ->badge(Surmasuk::query()->where('status', 'disposisi')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'disposisi')),
            'diterima' => Tab::make('Diterima')
                ->badge(Surmasuk::query()->where('status', 'diterima')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'diterima')),
            'selesai' => Tab::make('Selesai')
                ->badge(Surmasuk::query()->where('status', 'selesai')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'selesai')),
            'all' => Tab::make('All')
                ->badge(Surmasuk::count()),
        ];
    }
}
