<?php

namespace App\Filament\Widgets;

use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget

{

    protected function getStats(): array
    {
        $totalTransacations = BookingTransaction::count();
        // $approvedTransactions = BookingTransaction::where('payment_status', 'success')->count();
        $totalRevenue = BookingTransaction::where('payment_status', 'success')->sum('total_amount');
        $totalParticipant = BookingTransaction::where('payment_status', 'success')->sum('total_participant');

        return [
            Stat::make('Total Revenue', number_format($totalRevenue, 2, ".", "."))
                ->description('Revenue from approved transactions')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Total Participants', $totalParticipant)
                ->description('Total Participants')
                ->descriptionIcon('heroicon-c-user-group')
                ->color('info'),

            Stat::make('Total Transactions', $totalTransacations)
                ->description('All Transactions')
                ->descriptionIcon('heroicon-o-currency-dollar')
                ->color('warning'),
        ];
    }
}
