<?php

namespace App\Filament\Resources\CashAccounts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CashAccountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Akun Kas')
                    ->required(),

                TextInput::make('balance')
                    ->label('Saldo')
                    ->numeric()
                    ->required(),

                Textarea::make('description')
                    ->label('Keterangan')
                    ->columnSpanFull(),
            ]);
    }
}
