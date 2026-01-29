<?php

namespace App\Filament\Resources\TypeTrashes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TypeTrashForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
             TextInput::make('names')
                ->label('Nama Jenis Sampah')
                ->required()
                ->maxLength(255),

            Textarea::make('description')
                ->label('Deskripsi')
                ->required()
                ->rows(4)
                ->columnSpanFull(),
            ]);
    }
}
