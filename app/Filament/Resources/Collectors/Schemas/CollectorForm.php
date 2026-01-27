<?php

namespace App\Filament\Resources\Collectors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CollectorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('collector_names')
                    ->required(),
                TextInput::make('address')
                    ->label('Alamat')
                    ->email()
                    ->required(),
                TextInput::make('phone_number')
                    ->required(),
                Textarea::make('email')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('collector_type')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->numeric(),
            ]);
    }
}
