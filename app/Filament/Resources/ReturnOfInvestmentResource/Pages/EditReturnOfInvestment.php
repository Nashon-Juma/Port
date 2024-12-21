<?php

namespace App\Filament\Resources\ReturnOfInvestmentResource\Pages;

use App\Filament\Resources\ReturnOfInvestmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReturnOfInvestment extends EditRecord
{
    protected static string $resource = ReturnOfInvestmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
