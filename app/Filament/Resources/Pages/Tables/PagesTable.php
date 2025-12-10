<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->badge()
                    ->color('gray'),
                \Filament\Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktywna')
                    ->boolean()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ostatnia aktualizacja')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('title', 'asc');
    }
}
