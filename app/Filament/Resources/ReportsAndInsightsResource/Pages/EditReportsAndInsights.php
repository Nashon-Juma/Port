<?php

namespace App\Filament\Resources\ReportsAndInsightsResource\Pages;

use App\Filament\Resources\ReportsAndInsightsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReportsAndInsights extends EditRecord
{
    protected static string $resource = ReportsAndInsightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
