<?php

namespace App\Filament\Resources\FinanceTrackerResource\Pages;

use App\Filament\Resources\FinanceTrackerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFinanceTracker extends EditRecord
{
    protected static string $resource = FinanceTrackerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
