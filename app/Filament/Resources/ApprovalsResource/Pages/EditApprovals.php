<?php

namespace App\Filament\Resources\ApprovalsResource\Pages;

use App\Filament\Resources\ApprovalsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApprovals extends EditRecord
{
    protected static string $resource = ApprovalsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
