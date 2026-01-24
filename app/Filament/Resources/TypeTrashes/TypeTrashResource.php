<?php

namespace App\Filament\Resources\TypeTrashes;

use App\Filament\Resources\TypeTrashes\Pages\CreateTypeTrash;
use App\Filament\Resources\TypeTrashes\Pages\EditTypeTrash;
use App\Filament\Resources\TypeTrashes\Pages\ListTypeTrashes;
use App\Filament\Resources\TypeTrashes\Pages\ViewTypeTrash;
use App\Filament\Resources\TypeTrashes\Schemas\TypeTrashForm;
use App\Filament\Resources\TypeTrashes\Schemas\TypeTrashInfolist;
use App\Filament\Resources\TypeTrashes\Tables\TypeTrashesTable;
use App\Models\TypeTrash;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TypeTrashResource extends Resource
{
    protected static ?string $model = TypeTrash::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TypeTrashForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TypeTrashInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TypeTrashesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTypeTrashes::route('/'),
            'create' => CreateTypeTrash::route('/create'),
            'view' => ViewTypeTrash::route('/{record}'),
            'edit' => EditTypeTrash::route('/{record}/edit'),
        ];
    }
}
