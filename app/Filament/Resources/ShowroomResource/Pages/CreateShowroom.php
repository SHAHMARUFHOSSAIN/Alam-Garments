<?php

namespace App\Filament\Resources\ShowroomResource\Pages;

use App\Filament\Resources\ShowroomResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateShowroom extends CreateRecord
{
    protected static string $resource = ShowroomResource::class;

      protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Showroom created')
        ->body('Showroom created successfully.');
}

}
