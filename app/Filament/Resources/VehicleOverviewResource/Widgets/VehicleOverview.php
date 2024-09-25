<?php

namespace App\Filament\Resources\VehicleOverviewResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VehicleOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Unique views', '192.1k')
                ->description('32k increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([5, 10, 7, 12, 8, 14, 9]) // Data statis untuk chart
                ->color('success'),
        ];
    }
}
