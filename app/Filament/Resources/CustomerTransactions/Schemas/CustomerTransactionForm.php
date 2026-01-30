<?php

namespace App\Filament\Resources\CustomerTransactions\Schemas;

use App\Models\Customer;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CustomerTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                
                Select::make('customer_account_id')
                    ->label('Nasabah')
                    ->relationship('customers', 'names_customers')
                    ->preload()
                    ->required(),

                DatePicker::make('date')
                    ->label('Tanggal Transaksi')
                    ->required(),

                Select::make('transaction_type')
                    ->label('Jenis Transaksi')
                    ->options([
                        'deposit' => 'Setor Sampah',
                        'withdraw' => 'Tarik Saldo',
                        'exchange' => 'Tukar Poin',
                    ])
                    ->required(),

                TextInput::make('total_point')
                    ->label('Total Poin')
                    ->numeric()
                    ->required()
                    ->default(0),

                TextInput::make('total_balance')
                    ->label('Total Saldo (Rp)')
                    ->numeric()
                    ->prefix('Rp')
                    ->required()
                    ->default(0),

                Textarea::make('descriptions')
                    ->label('Keterangan')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
