<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->sortable()
                    ->searchable(),
                    \Filament\Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable(),
                    \Filament\Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategoria')
                    ->sortable(),
                    \Filament\Tables\Columns\TextColumn::make('published_at')
                    ->label('Data publikacji')
                    ->date()
                    ->sortable(),
                    \Filament\Tables\Columns\IconColumn::make('is_case_study')
                    ->label('Studium przypadku')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                \Filament\Tables\Filters\SelectFilter::make('category_id')
                    ->label('Kategoria')
                    ->relationship('category', 'name'),
                \Filament\Tables\Filters\TernaryFilter::make('is_case_study')
                    ->label('Studium przypadku')
                    ->boolean()
                    ->trueLabel('Tylko Studium przypadku')
                    ->falseLabel('Bez Studium przypadku')
                    ->native(false),
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
