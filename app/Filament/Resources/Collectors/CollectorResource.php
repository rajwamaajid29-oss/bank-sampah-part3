<?php

namespace App\Filament\Resources\Collectors;

use App\Filament\Resources\Collectors\Pages\CreateCollector;
use App\Filament\Resources\Collectors\Pages\EditCollector;
use App\Filament\Resources\Collectors\Pages\ListCollectors;
use App\Filament\Resources\Collectors\Pages\ViewCollector;
use App\Filament\Resources\Collectors\Schemas\CollectorForm;
use App\Filament\Resources\Collectors\Schemas\CollectorInfolist;
use App\Filament\Resources\Collectors\Tables\CollectorsTable;
use App\Models\Collector;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CollectorResource extends Resource
{
    protected static ?string $model = Collector::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CollectorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CollectorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CollectorsTable::configure($table);
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
            'index' => ListCollectors::route('/'),
            'create' => CreateCollector::route('/create'),
            'view' => ViewCollector::route('/{record}'),
            'edit' => EditCollector::route('/{record}/edit'),
        ];
    }
}
