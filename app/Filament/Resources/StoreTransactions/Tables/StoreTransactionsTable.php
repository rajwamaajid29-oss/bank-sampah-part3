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
                TextColumn::make('customer_id')
                    ->label('ID Nasabah')
                    ->searchable(),
                TextColumn::make('collector_id')
                    ->label('ID Pengepul')
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
