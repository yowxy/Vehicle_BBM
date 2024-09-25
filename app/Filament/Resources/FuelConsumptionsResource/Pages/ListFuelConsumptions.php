<?php

namespace App\Filament\Resources\FuelConsumptionsResource\Pages;

use App\Filament\Resources\FuelConsumptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFuelConsumptions extends ListRecords
{
    protected static string $resource = FuelConsumptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
