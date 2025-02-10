<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\Category;
use App\Filament\Widgets\ChartSuccessTransaction;
use App\Filament\Widgets\StatsFailedTransaction;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\StatsSuccessTransaction;
use App\Filament\Widgets\SuccessAndFailed;
use Filament\Pages\Page;
use Filament\Panel;
use GrahamCampbell\ResultType\Success;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-home';

    protected static ?string $title = 'Dashboard';

    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
            SuccessAndFailed::class,
            ChartSuccessTransaction::class,
            Category::class,
        ];
    }
}
