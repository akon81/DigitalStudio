<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->helperText('Unikalny identyfikator strony (np. privacy-policy, terms-of-service)')
                    ->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/'),
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->required()
                    ->maxLength(255),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->label('Treść strony')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ]),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->label('Aktywna')
                    ->helperText('Tylko aktywna strona będzie widoczna publicznie')
                    ->default(false),
            ]);
    }
}
