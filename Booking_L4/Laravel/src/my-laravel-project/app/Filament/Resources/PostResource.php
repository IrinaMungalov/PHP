<?php

namespace App\Filament\Resources;

use App\Models\Post;
use App\Filament\Resources\PostResource\Pages;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('Описание')
                    ->nullable(),

                Forms\Components\Select::make('category_id')
                    ->label('Категория')
                    ->options(function () {
                        return \App\Models\Category::all()->pluck('name', 'id');
                    })
                    ->nullable()
                    ->searchable(),

                Forms\Components\DatePicker::make('published_at')
                    ->label('Дата публикации')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Заголовок')
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Категория')
                    ->searchable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Дата публикации')
                    ->date()
                    ->default('Дата не указана'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Создано')
                    ->dateTime(),
            ])
            ->filters([
                //
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
