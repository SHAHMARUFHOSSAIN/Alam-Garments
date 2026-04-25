<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class HrDashboard extends Page
{
    protected static ?string $navigationLabel = 'HR Dashboard';

    protected static string $view = 'filament.pages.hr-dashboard';

  public static function shouldRegisterNavigation(): bool
{
    return auth()->user()?->role === 'hr'
        || auth()->user()?->role === 'superadmin';
}

public static function canAccess(): bool
{
    return auth()->user()?->role === 'hr'
        || auth()->user()?->role === 'superadmin';
}

}
