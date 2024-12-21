<?php

namespace App\Filament\Resources\FinanceTrackerResource\Pages;

use App\Filament\Resources\FinanceTrackerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinanceTrackers extends ListRecords
{
    protected static string $resource = FinanceTrackerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
