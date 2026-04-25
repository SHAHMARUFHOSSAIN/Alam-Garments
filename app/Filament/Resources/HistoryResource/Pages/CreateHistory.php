<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateHistory extends CreateRecord
{
    protected static string $resource = HistoryResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('History created')
        ->body('History created successfully.');
}
}
