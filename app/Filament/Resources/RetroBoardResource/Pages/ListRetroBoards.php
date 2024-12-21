<?php

namespace App\Filament\Resources\RetroBoardResource\Pages;

use App\Filament\Resources\RetroBoardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRetroBoards extends ListRecords
{
    protected static string $resource = RetroBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
