<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('order')
                    ->label('Kolejność')
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('question')
                    ->label('Pytanie')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                \Filament\Tables\Columns\TextColumn::make('answer')
                    ->label('Odpowiedź')
                    ->limit(100)
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktywne')
                    ->boolean()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->label('Utworzono')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                \Filament\Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Aktywne')
                    ->boolean()
                    ->trueLabel('Tylko aktywne')
                    ->falseLabel('Tylko nieaktywne')
                    ->native(false),
            ])
            ->recordActions([
                EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
