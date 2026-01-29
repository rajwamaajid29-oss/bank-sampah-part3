<?php

namespace App\Filament\Resources\Trashes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\{
    TextInput,
    Textarea,
    Select,
    Grid
};

class TrashForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
                    ->schema([

                        TextInput::make('names')
                            ->label('Nama Sampah')
                            ->required()
                            ->maxLength(255),

                        Select::make('type_trash_id')
                            ->label('Jenis Sampah')
                            ->relationship('TypeTrash','names' )
                            ->preload()
                            ->required(),

                        TextInput::make('price')
                            ->label('Harga')
                            ->numeric()
                            ->prefix('Rp')
                            ->required(),

                        Select::make('unit')
                            ->label('Satuan')
                            ->options([
                                'gram'     => 'Gram',
                                'kilogram' => 'Kilogram',
                                'pcs'      => 'Pcs',
                            ])
                            ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
