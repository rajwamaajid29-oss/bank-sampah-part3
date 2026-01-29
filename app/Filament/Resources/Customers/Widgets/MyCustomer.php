<?php

namespace App\Filament\Resources\Customers\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Customer;


class MyCustomer extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customer', Customer::count()),

            Stat::make('Punya Email', Customer::whereNotNull('email')->count()),

            Stat::make('Punya Nomor HP', Customer::whereNotNull('phone_numbers')->count()),        ];
    }

        protected int | string | array $columnSpan = 'full';

}
