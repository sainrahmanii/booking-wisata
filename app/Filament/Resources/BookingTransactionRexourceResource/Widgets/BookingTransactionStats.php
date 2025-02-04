<?php

namespace App\Filament\Resources\BookingTransactionRexourceResource\Widgets;

use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingTransactionStats extends BaseWidget
{
    protected function getStats(): array
    {

        $totalTransacations = BookingTransaction::count();
        $approvedTransactions = BookingTransaction::where('payment_status', 'success')->count();
        $totalRevenue = BookingTransaction::where('payment_status', 'success')->sum('total_amount');

        return [
            Stat::make('Total Transactions', $totalTransacations)
            ->description('All Transactions')
            ->descriptionIcon('heroicon-o-currency-dollar')
            ->color('warning'),

            Stat::make('Approved Transactions', $approvedTransactions)
            ->description('Approved transactions')
            ->descriptionIcon('heroicon-o-check-circle')
            ->color('success'),
            
            Stat::make('Total Revenue', $totalRevenue)
            ->description('Revenue from approved transactions')
            ->descriptionIcon('heroicon-o-check-circle')
            ->color('success')
        ];
    }
}
