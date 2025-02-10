<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\Category;
use App\Filament\Widgets\ChartSuccessTransaction;
use App\Filament\Widgets\StatsFailedTransaction;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\StatsSuccessTransaction;
use Filament\Pages\Page;
use Filament\Panel;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-home';

    protected static ?string $title = 'Dashboard';

    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
<<<<<<< HEAD
            // ChartSuccessTransaction::class,
            Category::class,
=======
            ChartSuccessTransaction::class,
            StatsFailedTransaction::class,
>>>>>>> a7e298284b69a8a81ab2cfc7a1a331898084f4b7
        ];
    }
}
