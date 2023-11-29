<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\User;
use Faker\Core\Color;
use App\Models\Contact;
use App\Models\Consultation;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';

    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make(label:'Total', value: User::count())
                 ->description('Les utilisateurs enregistrés')
                 ->descriptionIcon('heroicon-m-arrow-trending-up')
                 ->color(color:'success')
                 ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
           
            Stat::make(label:'Total', value: Contact::count())
                 ->description('Les contacts enregistrés')
                 ->descriptionIcon('heroicon-m-arrow-trending-up')
                 ->color(color:'gray')
                 ->chart([7, 3, 7, 5, 9, 3, 9, 3]),
           
            Stat::make(label:'Total', value: Consultation::count())
                 ->description('Les demandes de consultation enregistrés')
                 ->descriptionIcon('heroicon-m-arrow-trending-up')
                 ->color(color:'info')
                 ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
           
            Stat::make(label:'Total', value: Post::count())
                 ->description('Les posts enregistrés')
                 ->descriptionIcon('heroicon-m-arrow-trending-up')
                 ->color(color:'warning')
                 ->chart([7, 2, 10, 3, 15, 4, 17]),
           

        ];
    }
}
