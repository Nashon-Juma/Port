<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RetroBoardResource\Pages;
use App\Filament\Resources\RetroBoardResource\RelationManagers;
use App\Models\RetroBoard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RetroBoardResource extends Resource
{
    protected static ?string $model = RetroBoard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Journal & Planning';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListRetroBoards::route('/'),
            'create' => Pages\CreateRetroBoard::route('/create'),
            'edit' => Pages\EditRetroBoard::route('/{record}/edit'),
        ];
    }
}
