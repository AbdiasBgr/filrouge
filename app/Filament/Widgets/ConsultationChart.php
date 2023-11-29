<?php

namespace App\Filament\Widgets;

use Flowframe\Trend\Trend;
use App\Models\Consultation;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class ConsultationChart extends ChartWidget
{
    protected static ?string $heading = 'CONSULTATIONS';

    protected static ?int $sort = 2;


    protected static string $color = 'primary';


    protected function getData(): array
    {
        $data = Trend::model(Consultation::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Consultations enregistrés',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
