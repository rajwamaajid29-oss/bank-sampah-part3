<?php

namespace App\Filament\Resources\Points\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;


class PointForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema

    ->schema([
            Section::make('Points Data')
                ->description('Form pengelolaan data poin'),
                

                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->maxLength(100)
                        ->placeholder('Contoh: Point Plastik'),

                    TextInput::make('point_per_gram')
                        ->label('Point per Gram')
                        ->numeric()
                        ->required()
                        ->minValue(0)
                        ->step(0.01)
                        ->placeholder('Contoh: 0.25'),

                    Textarea::make('description')
                        ->label('Description')
                        ->rows(4)
                        ->maxLength(255)
                        ->placeholder('Deskripsi atau keterangan tambahan'),

                ])
                ->columns(2);
    }
}
