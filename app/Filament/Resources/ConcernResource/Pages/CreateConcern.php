<?php

namespace App\Filament\Resources\ConcernResource\Pages;

use App\Filament\Resources\ConcernResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateConcern extends CreateRecord
{
    protected static string $resource = ConcernResource::class;

      protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Concern created')
        ->body('Concern created successfully.');
}

}
