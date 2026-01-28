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
                Textarea::make('address')
                    ->label('Alamat')
                    ->required(),
                TextInput::make('phone_number')
                    ->required(),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->columnSpanFull(),
                TextInput::make('collector_type')
                    ->required(),
                TextInput::make('status')
                    ->required()
            ]);
    }
}
