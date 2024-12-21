<?php

namespace App\Filament\Resources\RecurringPaymentResource\Pages;

use App\Filament\Resources\RecurringPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecurringPayment extends EditRecord
{
    protected static string $resource = RecurringPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
