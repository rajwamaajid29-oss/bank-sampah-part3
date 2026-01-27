<?php

namespace App\Filament\Resources\Collectors\Pages;

use App\Filament\Resources\Collectors\CollectorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCollector extends ViewRecord
{
    protected static string $resource = CollectorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
