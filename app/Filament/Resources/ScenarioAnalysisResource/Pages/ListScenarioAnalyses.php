<?php

namespace App\Filament\Resources\ScenarioAnalysisResource\Pages;

use App\Filament\Resources\ScenarioAnalysisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScenarioAnalyses extends ListRecords
{
    protected static string $resource = ScenarioAnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
