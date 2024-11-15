<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostsResource\Pages;
use App\Filament\Resources\PostsResource\RelationManagers;
use App\Models\Post;
use Auth;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\BelongsToMany;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
                FileUpload::make('image_top')
                    ->label('Image 1') // Optional: Add a custom label
                    ->image() // Ensures that only image files are uploaded
                    ->directory('images') // Optional: Specify the directory where images will be stored
                    ->maxSize(2048), // Optional: Limit the maximum file size to 1MB
                FileUpload::make('image_bottom')
                    ->label('Image 2') // Optional: Add a custom label
                    ->image() // Ensures that only image files are uploaded
                    ->directory('images') // Optional: Specify the directory where images will be stored
                    ->maxSize(2048), // Optional: Limit the maximum file size to 1MB
                TextInput::make('title')
                    ->label('Titre')
                    ->maxLength(255)
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state) {
                        $set('slug', Str::slug($state));
                    })
                    ->placeholder('Entrez le titre de l\'article'),
                TextInput::make('slug')
                    ->label('Slug')
                    ->maxLength(255)
                    ->required(),
                Grid::make(1) // Single-column grid for full-width components
                    ->schema([
                        RichEditor::make('body')
                            ->label('Content')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->placeholder('Enter your content here')
                            ->maxLength(5000),
                        Textarea::make('citation')
                            ->label('Citation')
                            ->placeholder('Entrez la citation de l\'article'),
                    ]),
                Grid::make(2)
                    ->schema([
                        TextInput::make('autor')
                            ->label('Auteur')
                            ->placeholder('Entrez l\'auteur de l\'article'),
                        DateTimePicker::make('published_at')
                            ->label('Publié le')
                            ->required()
                            ->placeholder('Entrez la date de publication de l\'article'),
                        BelongsToSelect::make('category_id')
                            ->relationship('category', 'title')
                            ->required(),
                    ]),
                Toggle::make('published')
                    ->label('Publié') // Optional: Add a custom label
                    ->inline(true), // Optional: Make it appear inline
                Hidden::make('user_id')
                    ->default(Auth::id()),
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
                    ->tooltip(fn($record) => $record->content)
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->limit(10) // Limits the text content to 50 characters
                    ->tooltip(fn($record) => $record->content),
                BooleanColumn::make('published')
                    ->label('Publié')
                    ->sortable(),
                TextColumn::make('body')
                    ->label('Contenu')
                    ->limit(50) // Limits the text content to 50 characters
                    ->tooltip(fn($record) => $record->content)
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
