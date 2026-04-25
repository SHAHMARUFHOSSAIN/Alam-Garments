<?php

namespace App\Filament\Resources\ShowroomResource\Pages;

use App\Filament\Resources\ShowroomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditShowroom extends EditRecord
{
    protected static string $resource = ShowroomResource::class;

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
        ->title('Showroom Updated')
        ->body('Showroom Updated successfully.');
}
}
