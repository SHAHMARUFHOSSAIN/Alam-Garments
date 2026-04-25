<?php

namespace App\Filament\Resources\CareerResource\Pages;

use App\Filament\Resources\CareerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateCareer extends CreateRecord
{
    protected static string $resource = CareerResource::class;

      protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Career created')
        ->body('Career created successfully.');
}

}
