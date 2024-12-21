<?php

namespace App\Filament\Resources\FreelanceEarningResource\Pages;

use App\Filament\Resources\FreelanceEarningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFreelanceEarning extends EditRecord
{
    protected static string $resource = FreelanceEarningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
