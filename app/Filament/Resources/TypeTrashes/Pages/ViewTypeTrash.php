<?php

namespace App\Filament\Resources\TypeTrashes\Pages;

use App\Filament\Resources\TypeTrashes\TypeTrashResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTypeTrash extends ViewRecord
{
    protected static string $resource = TypeTrashResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
