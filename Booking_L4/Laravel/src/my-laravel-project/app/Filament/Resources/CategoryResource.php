<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    
    protected static ?string $navigationLabel = 'Categories';

    
    protected static ?string $navigationGroup = 'Content';

    
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('name')
                    ->required()  
                    ->label('Category Name') 
                    ->maxLength(255), 
            ]);
    }

    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Category Name')
                    ->searchable(), 
            ])
            ->filters([
                
            ])
            ->actions([
                
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
