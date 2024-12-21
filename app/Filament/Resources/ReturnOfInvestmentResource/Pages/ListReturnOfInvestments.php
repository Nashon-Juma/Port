<?php

namespace App\Filament\Resources\ReturnOfInvestmentResource\Pages;

use App\Filament\Resources\ReturnOfInvestmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReturnOfInvestments extends ListRecords
{
    protected static string $resource = ReturnOfInvestmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
