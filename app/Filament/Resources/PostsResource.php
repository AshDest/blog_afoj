<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostsResource\Pages;
use App\Filament\Resources\PostsResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostsResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                ImageColumn::make('image_top')
                    ->label('Image')
                    ->square(),
                TextColumn::make('title')
                    ->searchable()
                    ->label('Titre')
                    ->limit(20) // Limits the text content to 50 characters
                    ->tooltip(fn ($record) => $record->content)
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->limit(10) // Limits the text content to 50 characters
                    ->tooltip(fn ($record) => $record->content),
                BooleanColumn::make('featured')
                    ->label('En vedette')
                    ->sortable(),
                TextColumn::make('body')
                    ->label('Contenu')
                    ->limit(50) // Limits the text content to 50 characters
                    ->tooltip(fn ($record) => $record->content)
                    ->searchable(),
                TextColumn::make('published_at')
                    ->label('Publié le')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                // filters by published_at and title
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePosts::route('/create'),
            'edit' => Pages\EditPosts::route('/{record}/edit'),
        ];
    }
}
