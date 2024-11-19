<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Placeholder::make('BACKGROUND'),
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('background'),
                                Select::make('is_active')
                                ->options([
                                    'active' => 'Active',
                                    'not_active' => 'Not Active'
                                ])
                            ]),
                    ]),
                Placeholder::make('ORGANISASI'),
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('imgOrganisasi')
                                    ->required(),
                                TextInput::make('Organisasi')
                                    ->required(),
                                Select::make('is_active')
                                    ->options([
                                        'active' => 'Active',
                                        'not_active' => 'Not Active'
                                    ])
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('background'),
                ImageColumn::make('imgOrganisasi'),
                TextColumn::make('Organisasi'),
                TextColumn::make('aktiv')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'aktiv' => 'danger',
                        'non_aktiv' => 'success',
                        default => 'gray',
                    }),
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
