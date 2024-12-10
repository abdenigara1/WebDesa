<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Data;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;


class BeritaResource extends Resource
{
    protected static ?string $model = Data::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Placeholder::make('JUDUL & ISI ARTIKEL'),
                Card::make()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Textinput::make('judulBerita'),
                                
                                Select::make('is_active')
                                ->options([
                                    'active' => 'Active',
                                    'not_active' => 'Not Active'
                                ]),

                                RichEditor::make('berita'),

                            ]),
                    ]),
                Placeholder::make('THUMBNAIL BERITA'),
                Card::make()
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                FileUpload::make('imgBeritaA')
                                    ->required(),
                                FileUpload::make('imgBeritaB')
                                    ->required(),
                                FileUpload::make('imgBeritaC')
                                    ->required(),


                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('judulBerita')->sortable(),
                TextColumn::make('updated_at')->sortable(),
                TextColumn::make('is_active')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'not_active' => 'danger',
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
