<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('question')
                    ->label('Pytanie')
                    ->required()
                    ->maxLength(255),

                \Filament\Forms\Components\Textarea::make('answer')
                    ->label('Odpowiedź')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),

                \Filament\Forms\Components\TextInput::make('order')
                    ->label('Kolejność')
                    ->numeric()
                    ->default(0)
                    ->required(),

                \Filament\Forms\Components\Toggle::make('is_active')
                    ->label('Aktywne')
                    ->default(true),
            ]);
    }
}
