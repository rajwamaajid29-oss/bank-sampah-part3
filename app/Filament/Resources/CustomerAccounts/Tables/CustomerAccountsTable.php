<?php

namespace App\Filament\Resources\CustomerAccounts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class CustomerAccountsTable
{
    public static function configure(Table $table): Table
    {
        return $table
                
                ->columns([
                TextColumn::make('customer_id')
                    ->searchable(),
                TextColumn::make('total_balance')
                    ->label('Total Balance')
                    ->searchable(),
                TextColumn::make('total_points')
                    ->label('Total Points')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status'),
            ])

            ->filters([
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
