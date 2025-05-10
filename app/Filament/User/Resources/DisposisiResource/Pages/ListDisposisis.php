<?php

namespace App\Filament\User\Resources\DisposisiResource\Pages;

use Filament\Actions;
use App\Models\Pegawai;
use App\Models\Disposisi;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\User\Resources\DisposisiResource;

class ListDisposisis extends ListRecords
{
    protected static string $resource = DisposisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    #[On('refresh-disposisi')]
    public function getTabs(): array
    {
        // Cek user role
        // $role = Auth::user()->role;
        // dd($role);

        // Email dari user yang login
        $email = Auth::user()->email;

        // Cari pegawai berdasarkan email tersebut
        $pegawai = Pegawai::where('email', $email)->first();

        // Cek apakah pegawai ditemukan, dan set $pegawaiId dengan null jika tidak ada
        $pegawaiId = $pegawai ? $pegawai->id : null;

        if ($pegawaiId) {
            return [

                // Tampilkan tab 'all' hanya jika role adalah 'SUPER-ADMIN'
                // 'all' => $role === 'SUPER-ADMIN' ? Tab::make('All')->badge(Disposisi::count()) : '',
                // 'all' => Tab::make('All')
                //     ->badge(Disposisi::count()),

                'disposisi' => Tab::make('Disposisi')
                    ->badge(Disposisi::query()->where('pegawai_id', $pegawaiId)->where('status', 'disposisi')->count())
                    ->modifyQueryUsing(fn(Builder $query) => $query->where('pegawai_id', $pegawaiId)->where('status', 'disposisi')),
                'diterima' => Tab::make('Diterima')
                    ->badge(Disposisi::query()->where('pegawai_id', $pegawaiId)->where('status', 'diterima')->count())
                    ->modifyQueryUsing(fn(Builder $query) => $query->where('pegawai_id', $pegawaiId)->where('status', 'diterima')),
                'selesai' => Tab::make('Selesai')
                    ->badge(Disposisi::query()->where('pegawai_id', $pegawaiId)->where('status', 'selesai')->count())
                    ->modifyQueryUsing(fn(Builder $query) => $query->where('pegawai_id', $pegawaiId)->where('status', 'selesai')),
                'all' => Tab::make('All')
                    ->badge(Disposisi::where('pegawai_id', $pegawaiId)->count()) // Menggunakan pegawai_id dari tabel Pegawai
                    ->modifyQueryUsing(function (Builder $query) use ($pegawaiId) {
                        if ($pegawaiId) {
                            // Tampilkan semua Disposisi yang pegawai_id = $pegawaiId
                            $query->where('pegawai_id', $pegawaiId);
                        }
                    }),
            ];
        } else {
            return [
                'Disposisi' => Tab::make('disposisi')
                    ->badge(0)
                    ->modifyQueryUsing(fn(Builder $query) => $query->where('pegawai_id', 0)),
            ];
        }
    }
}
