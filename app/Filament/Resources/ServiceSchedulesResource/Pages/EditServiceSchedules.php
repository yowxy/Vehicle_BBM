<?php

namespace App\Filament\Resources\ServiceSchedulesResource\Pages;

use App\Filament\Resources\ServiceSchedulesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceSchedules extends EditRecord
{
    protected static string $resource = ServiceSchedulesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
