<?php

namespace App\Filament\Resources\HabitTrackerResource\Pages;

use App\Filament\Resources\HabitTrackerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHabitTracker extends EditRecord
{
    protected static string $resource = HabitTrackerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
