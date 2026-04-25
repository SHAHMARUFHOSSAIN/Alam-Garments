<?php

namespace App\Filament\Resources\JobApplicationResource\Pages;

use App\Filament\Resources\JobApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateJobApplication extends CreateRecord
{
    protected static string $resource = JobApplicationResource::class;

      protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Job created')
        ->body('Job created successfully.');
}

}
