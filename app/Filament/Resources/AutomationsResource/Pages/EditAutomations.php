<?php

namespace App\Filament\Resources\AutomationsResource\Pages;

use App\Filament\Resources\AutomationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutomations extends EditRecord
{
    protected static string $resource = AutomationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
