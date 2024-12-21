<?php

namespace App\Filament\Resources\ReportsAndInsightsResource\Pages;

use App\Filament\Resources\ReportsAndInsightsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReportsAndInsights extends ListRecords
{
    protected static string $resource = ReportsAndInsightsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
