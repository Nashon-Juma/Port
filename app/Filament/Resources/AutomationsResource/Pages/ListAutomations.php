<?php

namespace App\Filament\Resources\AutomationsResource\Pages;

use App\Filament\Resources\AutomationsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutomations extends ListRecords
{
    protected static string $resource = AutomationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
