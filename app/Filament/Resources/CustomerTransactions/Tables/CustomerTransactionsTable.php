<?php

namespace App\Filament\Resources\CustomerTransactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CustomerTransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('customer_account_id')
                    ->label('Nasabah')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),

                TextColumn::make('transaction_type')
                    ->label('Jenis')
                    ->badge()
                    ->colors([
                        'success' => 'deposit',
                        'warning' => 'withdraw',
                        'info' => 'exchange',
                    ])
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'deposit' => 'Setor',
                        'withdraw' => 'Tarik',
                        'exchange' => 'Tukar',
                        default => ucfirst($state),
                    }),

                TextColumn::make('total_point')
                    ->label('Poin')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('total_balance')
                    ->label('Saldo (Rp)')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                TextColumn::make('descriptions')
                    ->label('Keterangan')
                    ->limit(30)
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->since()
                    ->sortable(),
            ])
            ->filters([

                SelectFilter::make('transaction_type')
                    ->label('Jenis Transaksi')
                    ->options([
                        'deposit' => 'Setor',
                        'withdraw' => 'Tarik',
                        'exchange' => 'Tukar',
                    ]),

                Filter::make('date')
                    ->form([
                        DatePicker::make('from')->label('Dari'),
                        DatePicker::make('until')->label('Sampai'),
                    ])
                    ->query(function (Builder $query, array $data) {
                        return $query
                            ->when($data['from'], fn ($q, $date) => $q->whereDate('date', '>=', $date))
                            ->when($data['until'], fn ($q, $date) => $q->whereDate('date', '<=', $date));
                    }),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
