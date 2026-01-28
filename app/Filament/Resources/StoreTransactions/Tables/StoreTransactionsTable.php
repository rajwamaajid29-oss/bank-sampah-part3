<?php

namespace App\Filament\Resources\StoreTransactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StoreTransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_code')
                    ->label('Kode Transaksi')
                    ->searchable(),
                TextColumn::make('transaction_date')
                    ->label('Tanggal Transaksi')
                    ->dateTime()
                    ->searchable(),
                TextColumn::make('customers_id')
                    ->label('ID Nasabah')
                    ->searchable(),
                TextColumn::make('seller_id')
                    ->label('ID Penjual')
                    ->searchable(),
                TextColumn::make('total_amount')
                    ->label('Jumlah Total')
                    ->searchable(),
                TextColumn::make('payment_method')
                    ->label('Metode Pembyaran')
                    ->searchable(),
                TextColumn::make('payment_status')
                    ->label('Status Pembayaran')
                    ->searchable(),
                TextColumn::make('transaction_status')
                    ->label('Status Transaksi')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
