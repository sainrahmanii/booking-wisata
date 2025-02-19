<?php

namespace App\Filament\Widgets;

use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuccessAndFailed extends BaseWidget
{
    protected function getStats(): array
    {
        $approvedTransactions = BookingTransaction::where('is_paid', 1)->count();
        $failedTransactions = BookingTransaction::where('is_paid', 2)->count();
        $waitingTransactions = BookingTransaction::where('is_paid', 'waiting')->count();
        return [
            Stat::make('Total Success Transactions', $approvedTransactions)
                ->description('All Transactions')
                ->descriptionIcon('heroicon-o-currency-dollar')
                ->color('success'),

            Stat::make('Total Waiting Transactions', $waitingTransactions)
                ->description('All Transactions')
                ->descriptionIcon('heroicon-o-currency-dollar')
                ->color('warning'),

            Stat::make('Total Failed Transactions', $failedTransactions)
                ->description('All Transactions')
                ->descriptionIcon('heroicon-o-currency-dollar')
                ->color('danger'),
        ];
    }
}