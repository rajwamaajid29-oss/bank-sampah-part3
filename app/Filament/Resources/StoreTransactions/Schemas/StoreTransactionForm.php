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
                    ->label('Kode Transaksi')
                    ->required(),
                DatePicker::make('transaction_date')
                    ->label('Tanggal Transaksi')
                    ->date()
                    ->required(),
                Select::make('customers_id')
                    ->label('ID Nasabah')
                    ->relationship('customers','id' )
                    ->required(),
                Select::make('seller_id')
                    ->label('ID Penjual')
                    ->required(),
                TextInput::make('total_amount')
                    ->label('Jumlah Total'),
                TextInput::make('payment_method')
                    ->label('Metode Pembayaran'),
                TextInput::make('payment_status')
                    ->label('Status Pembayaran'),
                TextInput::make('transaction_status')
                    ->label('Status Transaksi')
            ]);
    }
}
