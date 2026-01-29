<?php

namespace App\Filament\Resources\StoreTransactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class StoreTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               TextInput::make('transaction_code')
                    ->label('Transaction Code')
                    ->required()
                    ->maxLength(50),

                DatePicker::make('transaction_date')
                    ->label('Transaction Date')
                    ->required(),

                Select::make('customer_id')
                    ->label('Customer')
                    ->relationship('customer', 'names_customers') // relasi ke Customer, tampilkan kolom 'name'
                    ->required(),

                Select::make('collector_id')
                    ->label('Collector')
                    ->relationship('collector', 'collector_names') // relasi ke Collector, tampilkan kolom 'name'
                    ->required(),

                TextInput::make('total_amount')
                    ->label('Total Amount')
                    ->numeric()
                    ->required(),

                Select::make('payment_method')
                    ->label('Payment Method')
                    ->options([
                        'cash' => 'Cash',
                        'transfer' => 'Transfer',
                        'qris' => 'QRIS',
                    ])
                    ->required(),

                Select::make('payment_status')
                    ->label('Payment Status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'failed' => 'Failed',
                    ])
                    ->required(),
            
            ]);
    }
}
