<?php

namespace App\Filament\Resources\ConcernResource\Pages;

use App\Filament\Resources\ConcernResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditConcern extends EditRecord
{
    protected static string $resource = ConcernResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

     protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getSavedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Concern Updated')
        ->body('Concern Updated successfully.');
}

}
