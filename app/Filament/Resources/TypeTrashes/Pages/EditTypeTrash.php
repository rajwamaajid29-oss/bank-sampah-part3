<?php

namespace App\Filament\Resources\TypeTrashes\Pages;

use App\Filament\Resources\TypeTrashes\TypeTrashResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTypeTrash extends EditRecord
{
    protected static string $resource = TypeTrashResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
