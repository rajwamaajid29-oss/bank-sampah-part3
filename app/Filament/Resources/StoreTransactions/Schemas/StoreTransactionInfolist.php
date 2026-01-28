<?php

namespace App\Filament\Resources\StoreTransactions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StoreTransactionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('transaction_code'),
                TextEntry::make('transaction_date')
                    ->label('Email address'),
                TextEntry::make('customers_id')
                    ->columnSpanFull(),
                TextEntry::make('seller_id'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('total_amount')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('payment_method')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('payment_status')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('transaction_status')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
