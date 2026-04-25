<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditCareer extends EditRecord
{
    protected static string $resource = CareerResource::class;

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
        ->title('Career Updated')
        ->body('Career Updated successfully.');
}

}
