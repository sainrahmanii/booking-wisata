<?php

namespace App\Filament\Widgets;

use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuccessAndFailed extends BaseWidget
{
    protected function getStats(): array
    {
        $approvedTransactions = BookingTransaction::where('payment_status', 'success')->count();
        $failedTransactions = BookingTransaction::where('payment_status', 'failed')->count();
        $waitingTransactions = BookingTransaction::where('payment_status', 'waiting')->count();
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
