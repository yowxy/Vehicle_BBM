<?php

namespace App\Filament\Resources\FuelConsumptionsResource\Pages;

use App\Filament\Resources\FuelConsumptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFuelConsumptions extends EditRecord
{
    protected static string $resource = FuelConsumptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
