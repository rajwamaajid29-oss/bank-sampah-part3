<?php

namespace App\Filament\Resources\CustomerAccounts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;


class CustomerAccountForm
{
     public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer','id')
                    ->required(),
                TextInput::make('total_balance')
                    ->label('Balance')
                    ->numeric()
                    ->required(),
                TextInput::make('total_points')
                    ->label('Points')
                    ->numeric()
                    ->required(),
                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'blocked' => 'Blocked',
                    ])
                    ->label('Status')
                    ->required(),
            ]);
    }
}