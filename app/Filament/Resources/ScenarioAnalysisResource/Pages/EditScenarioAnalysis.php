<?php

namespace App\Filament\Resources\ScenarioAnalysisResource\Pages;

use App\Filament\Resources\ScenarioAnalysisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScenarioAnalysis extends EditRecord
{
    protected static string $resource = ScenarioAnalysisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
