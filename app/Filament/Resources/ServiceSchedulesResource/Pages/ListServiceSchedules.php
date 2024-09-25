<?php

namespace App\Filament\Resources\ServiceSchedulesResource\Pages;

use App\Filament\Resources\ServiceSchedulesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceSchedules extends ListRecords
{
    protected static string $resource = ServiceSchedulesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
