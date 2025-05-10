<?php

namespace App\Filament\Widgets;

use App\Models\Berkas;
use App\Models\Layangukur;
use App\Models\Pegawai;
use App\Models\Shmsg;
use App\Models\Surmasuk;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SatuanWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Tanah Kasultanan', Layangukur::count())
            //     ->description('Daftar Tanah Kasultanan')
            //     ->descriptionIcon('heroicon-c-document-duplicate', IconPosition::Before)
            //     // ->chart([5, 2, 4, 8, 15, 10])
            //     ->color('info'),
            // Stat::make('Layanan Kekancingan', Berkas::count())
            //     ->description('Layanan Permohonan Kekancingan')
            //     ->descriptionIcon('heroicon-c-document-duplicate', IconPosition::Before)
            //     // ->chart([5, 2, 4, 8, 15, 10])
            //     ->color('info'),
            Stat::make('Pegawai', Pegawai::count())
                ->description('Pegawai KHP Datu Dana Suyasa')
                ->descriptionIcon('heroicon-m-user-group', IconPosition::Before)
                // ->chart([5, 2, 4, 8, 15, 10])
                ->color('danger'),
            Stat::make('Surat Masuk', Surmasuk::count())
                ->description('Surat masuk dan Disposisi')
                ->descriptionIcon('heroicon-m-envelope', IconPosition::Before)
                // ->chart([5, 2, 4, 8, 15, 10])
                ->color('warning'),
            Stat::make('Users Registered', User::count())
                ->description('All users that have joined')
                ->descriptionIcon('heroicon-m-user', IconPosition::Before)
                // ->chart([1, 2, 4, 8, 10, 20])
                ->color('success'),
            // Stat::make('SHM Kasultanan', Shmsg::count())
            //     ->description('Sertipikat Hak Milik Kasultanan')
            //     ->descriptionIcon('heroicon-m-envelope', IconPosition::Before)
            //     // ->chart([5, 2, 4, 8, 15, 10])
            //     ->color('warning'),
        ];
    }
}
