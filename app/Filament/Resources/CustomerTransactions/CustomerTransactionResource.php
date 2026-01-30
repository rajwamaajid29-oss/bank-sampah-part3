<?php

namespace App\Filament\Resources\CustomerTransactions;

use App\Filament\Resources\CustomerTransactions\Pages\CreateCustomerTransaction;
use App\Filament\Resources\CustomerTransactions\Pages\EditCustomerTransaction;
use App\Filament\Resources\CustomerTransactions\Pages\ListCustomerTransactions;
use App\Filament\Resources\CustomerTransactions\Schemas\CustomerTransactionForm;
use App\Filament\Resources\CustomerTransactions\Tables\CustomerTransactionsTable;
use App\Models\CustomerTransaction;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CustomerTransactionResource extends Resource
{
    protected static ?string $model = CustomerTransaction::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CustomerTransactionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CustomerTransactionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomerTransactions::route('/'),
            'create' => CreateCustomerTransaction::route('/create'),
            'edit' => EditCustomerTransaction::route('/{record}/edit'),
        ];
    }
}
