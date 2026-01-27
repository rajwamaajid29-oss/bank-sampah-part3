<?php

namespace App\Filament\Resources\Trashes;

use App\Filament\Resources\Trashes\Pages\CreateTrash;
use App\Filament\Resources\Trashes\Pages\EditTrash;
use App\Filament\Resources\Trashes\Pages\ListTrashes;
use App\Filament\Resources\Trashes\Schemas\TrashForm;
use App\Filament\Resources\Trashes\Tables\TrashesTable;
use App\Models\Trash;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrashResource extends Resource
{
    protected static ?string $model = Trash::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TrashForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrashesTable::configure($table);
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
            'index' => ListTrashes::route('/'),
            'create' => CreateTrash::route('/create'),
            'edit' => EditTrash::route('/{record}/edit'),
        ];
    }
}
