<?php

namespace App\Filament\Pages;

    use App\Filament\Widgets\DashboardOverview;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';


public function getHeaderWidgets(): array
{
    return [
        DashboardOverview::class,
    ];
}

}
