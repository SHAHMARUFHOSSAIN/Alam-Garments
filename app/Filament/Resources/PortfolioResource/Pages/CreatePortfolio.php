<?php

namespace App\Filament\Resources\PortfolioResource\Pages;

use App\Filament\Resources\PortfolioResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreatePortfolio extends CreateRecord
{
    protected static string $resource = PortfolioResource::class;

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
