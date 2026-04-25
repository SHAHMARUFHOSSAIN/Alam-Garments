<?php

namespace App\Filament\Resources\MissionResource\Pages;

use App\Filament\Resources\MissionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateMission extends CreateRecord
{
    protected static string $resource = MissionResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Mission created')
        ->body('Mission created successfully.');
}

}
