<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Customers\Widgets\MyCustomer;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;
 protected function getHeaderWidgets(): array
    {
        return [
            MyCustomer::class,
        ];
    }
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),

        ];
    }
}
