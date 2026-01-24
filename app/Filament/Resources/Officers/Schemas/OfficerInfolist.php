<?php

namespace App\Filament\Resources\Officers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OfficerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('names_officer'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('address')
                    ->columnSpanFull(),
                TextEntry::make('phone_numbers'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
