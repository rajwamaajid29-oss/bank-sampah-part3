<?php

namespace App\Filament\Resources\TypeTrashes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TypeTrashInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('types_names'),
                TextEntry::make('price_per_gram')
                    ->numeric(),
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
