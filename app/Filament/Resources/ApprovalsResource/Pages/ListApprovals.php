<?php

namespace App\Filament\Resources\ApprovalsResource\Pages;

use App\Filament\Resources\ApprovalsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApprovals extends ListRecords
{
    protected static string $resource = ApprovalsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
