<?php

namespace App\Filament\Resources\Projects\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            \Filament\Schemas\Components\Section::make([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Tytuł')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),

                \Filament\Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                \Filament\Forms\Components\Textarea::make('excerpt')
                    ->label('Zajawka')
                    ->rows(3)
                    ->required(),

                \Filament\Forms\Components\RichEditor::make('description')
                    ->label('Pełny opis')
                    ->required()
                    ->customBlocks([
                        \App\Filament\RichContentCustomBlocks\HeroBlock::class,
                        \App\Filament\RichContentCustomBlocks\CallToActionBlock::class,
                    ])
                    ->mergeTags([
                        'name',
                        'today',
                    ]),

                \Filament\Forms\Components\SpatieMediaLibraryFileUpload::make('images')
                    ->label('Zdjęcia projektu')
                    ->collection('images')
                    ->multiple()
                    ->image()
                    ->conversion('thumb'),

                \Filament\Forms\Components\TextInput::make('url')
                    ->label('Adres www projektu')
                    ->prefix('https://')
                    ->placeholder('np. domena.pl'),

                \Filament\Forms\Components\Select::make('category_id')
                    ->label('Kategoria')
                    ->relationship('category', 'name')
                    ->required(),

                \Filament\Forms\Components\Select::make('techStacks')
                    ->label('Stacki technologiczne')
                    ->multiple()
                    ->relationship('techStacks', 'name')
                    ->required()
                    ->createOptionForm([
                        \Filament\Forms\Components\TextInput::make('name')
                            ->label('Nazwa stacka')
                            ->required(),
                        \Filament\Forms\Components\Textarea::make('description')
                            ->label('Opis stacka'),
                    ]),

                \Filament\Forms\Components\DatePicker::make('published_at')
                    ->label('Data publikacji')
                    ->required(),
            ])->columnSpanFull(),

            \Filament\Schemas\Components\Section::make('Studium przypadku')
                ->description('Opcjonalne pola dla projektów wyświetlanych w sekcji Studium przypadku')
                ->schema([
                    \Filament\Forms\Components\Toggle::make('is_case_study')
                        ->label('Czy to jest Studium przypadku?')
                        ->live()
                        ->default(false),

                    \Filament\Forms\Components\TextInput::make('case_study_subtitle')
                        ->label('Podtytuł dla Studium przypadku')
                        ->maxLength(255)
                        ->visible(fn ($get) => $get('is_case_study')),

                    \Filament\Forms\Components\Textarea::make('case_study_goal')
                        ->label('Wyjściowy cel')
                        ->rows(4)
                        ->visible(fn ($get) => $get('is_case_study')),

                    \Filament\Forms\Components\Textarea::make('case_study_process')
                        ->label('Proces')
                        ->rows(4)
                        ->visible(fn ($get) => $get('is_case_study')),

                    \Filament\Forms\Components\Textarea::make('case_study_result')
                        ->label('Efekt')
                        ->rows(4)
                        ->visible(fn ($get) => $get('is_case_study')),

                    \Filament\Forms\Components\SpatieMediaLibraryFileUpload::make('case_study')
                        ->label('Zdjęcie dla Studium przypadku')
                        ->collection('case_study')
                        ->image()
                        ->conversion('thumb')
                        ->visible(fn ($get) => $get('is_case_study')),
                ])->columnSpanFull()
                ->collapsible(),
        ]);
    }
}
