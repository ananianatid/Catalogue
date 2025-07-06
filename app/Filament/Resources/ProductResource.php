<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $label = 'Produits';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->reactive() // rend le champ réactif
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Met à jour le slug dès que "name" change
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\TextInput::make('price')
                    ->label("Prix")
                    ->required()
                    ->numeric()
                    ->prefix('FCFA'),
                Forms\Components\TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('discount_percent')
                    ->label("Pourcentage de promotion")
                    ->required()
                    ->numeric()
                    ->default(0),
                ])->columns(2),
                Forms\Components\Toggle::make('is_active')
                    ->label("En vente")
                    ->required(),
                Forms\Components\Toggle::make('is_featured')
                    ->label("En Promotion")
                    ->required(),
                Forms\Components\Section::make()->schema([
                Forms\Components\Select::make('brand_id')
                    ->label('Marque')
                    ->relationship(name: 'brand', titleAttribute: 'name')
                    ->live()
                    ->required()
                    ->preload()
                    ->afterStateUpdated(fn(Set $set) => $set('state_id', null))
                    ->searchable(),
                Forms\Components\Select::make('category_id')
                    ->label('Catégorie' )
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->live()
                    ->required()
                    ->preload()
                    ->afterStateUpdated(fn(Set $set) => $set('state_id', null))
                    ->searchable(),
                ])
                ->columns(2),
                Forms\Components\TextInput::make('visibility')
                    ->default("public")
                    ->hidden()
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('tech_sheet')
                    ->columnSpanFull(),
                // Forms\Components\Textarea::make('images')
                //     ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                    ->label('Images')
                    ->disk('public') // stockage local (dans storage/app/public)
                    ->directory('uploads/images') // sous-dossier
                    ->multiple() // ← cette ligne permet l’upload de plusieurs fichiers
                    ->image() // accepte uniquement les images
                    ->reorderable() // possibilité de réorganiser les images
                    ->preserveFilenames() // facultatif : garde les noms originaux
                    ->maxSize(2048), // max 2 Mo par image

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_percent')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('visibility')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
