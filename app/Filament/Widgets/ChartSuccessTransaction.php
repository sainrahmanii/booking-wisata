<?php

namespace App\Filament\Widgets;

use App\Models\BookingTransaction;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ChartSuccessTransaction extends ChartWidget
{
    protected static ?string $heading = 'Total Pengunjung';

    protected function getData(): array
    {
        $data = Trend::model(BookingTransaction::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Total pengunjung',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(function (TrendValue $value) {
                $date = Carbon::createFromFormat('Y-m', $value->date);
                $formattedDate = $date->format('M');

                return $formattedDate;
            }),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
