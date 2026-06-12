<?php

namespace App\Filament\Resources\Widgets;

use App\Models\Booking;
use App\Models\Galeri;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Booking', Booking::count())
                ->description('Semua booking masuk')
                ->color('success'),

            Stat::make('Booking Pending', Booking::where('status', 'pending')->count())
                ->description('Menunggu konfirmasi')
                ->color('warning'),

            Stat::make('Total Foto Galeri', Galeri::count())
                ->description('Foto di galeri website')
                ->color('info'),
        ];
    }
}
