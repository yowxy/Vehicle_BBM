<?php

namespace App\Filament\Resources\VehicleChartResource\Widgets;

use Filament\Widgets\ChartWidget;

class VehicleChart extends ChartWidget
{
    protected static ?string $heading = 'Vehicle Chart';
    protected static string $color = 'info';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Test Data',
                    'data' => [10, 20, 30, 40, 50],
                ],
            ],
            'labels' => ['January', 'February', 'March', 'April', 'May'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
