<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\User;
use Filament\Widgets\ChartWidget;

class UsersChart extends ChartWidget
{
    protected static ?string $heading = 'Posts';

    protected static ?int $sort = 2;

    protected function getData(): array
    {

        $data = $this->getUsersPerMonth();
        return [
            'datasets' => [
                [
                    'label' => 'Users',
                    'data' => $data['usersPerMonth']
                ]
            ],
            'labels' => $data['months']

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUsersPerMonth(): array
    {
        $now = Carbon::now();

        $usersPerMonth = [];

        $months = collect(range(1, 12)) ->map(function($month) use ($now, $usersPerMonth) {
            $count = User::whereMonth('created_at', Carbon::parse($now->month($month)->format('Y-m-d'))) ->count();
            $usersPerMonth[] = $count;

            return $now->month($month)->format(format:'M');

        }) ->toArray();


        return [
            'usersPerMonth' => $usersPerMonth,
            'months' => $months
        ];
    }


}
