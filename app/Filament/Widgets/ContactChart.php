<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class ContactChart extends ChartWidget
{
    protected static ?string $heading = 'Contacts';

    protected static ?int $sort = 3;


    protected static string $color = 'success';
     
    protected function getData(): array
    {
        $data = Trend::model(Contact::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();
     
        return [
            'datasets' => [
                [
                    'label' => 'Contacts enregistrés',
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
