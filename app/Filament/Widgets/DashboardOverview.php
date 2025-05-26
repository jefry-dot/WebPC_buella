<?php

namespace App\Filament\Widgets;

use App\Models\Menu;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget;

class DashboardOverview extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Menu', Menu::count())
                ->description('Semua menu yang terdaftar')
                ->color('success'),
                 Card::make('Total Menu', Menu::count())
            ->description('Semua menu yang terdaftar')
            ->color('success'),

        Card::make('Total Makanan', Menu::where('category', 'Makanan')->count())
            ->description('Menu kategori Makanan')
            ->color('info'),

        Card::make('Total Minuman', Menu::where('category', 'Minuman')->count())
            ->description('Menu kategori Minuman')
            ->color('warning'),

        Card::make('Total Snack', Menu::where('category', 'Snack')->count())
            ->description('Menu kategori Snack')
            ->color('gray'),    
        ];
    }
}
