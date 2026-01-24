<?php

namespace App\Filament\Resources\TypeTrashes\Pages;

use App\Filament\Resources\TypeTrashes\TypeTrashResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTypeTrashes extends ListRecords
{
    protected static string $resource = TypeTrashResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
