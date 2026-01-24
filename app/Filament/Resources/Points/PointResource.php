<?php

namespace App\Filament\Resources\Points;

use App\Filament\Resources\Points\Pages\CreatePoint;
use App\Filament\Resources\Points\Pages\EditPoint;
use App\Filament\Resources\Points\Pages\ListPoints;
use App\Filament\Resources\Points\Pages\ViewPoint;
use App\Filament\Resources\Points\Schemas\PointForm;
use App\Filament\Resources\Points\Schemas\PointInfolist;
use App\Filament\Resources\Points\Tables\PointsTable;
use App\Models\Point;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointResource extends Resource
{
    protected static ?string $model = Point::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PointForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PointInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointsTable::configure($table);
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
            'index' => ListPoints::route('/'),
            'create' => CreatePoint::route('/create'),
            'view' => ViewPoint::route('/{record}'),
            'edit' => EditPoint::route('/{record}/edit'),
        ];
    }
}
