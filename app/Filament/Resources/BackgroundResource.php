<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BackgroundResource\Pages;
use App\Filament\Resources\BackgroundResource\RelationManagers;
use App\Models\Background;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Placeholder;

class BackgroundResource extends Resource
{
    protected static ?string $model = Background::class;

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
                                TextInput::make('judul')
                                    ->nullable(),
                                FileUpload::make('background')
                                    ->nullable(),
                                Select::make('is_active')
                                    ->options([
                                        'active' => 'Active',
                                        'not_active' => 'Not Active',
                                    ])
                                    ->default('active')
                                    ->nullable()
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'), // Menampilkan ID
                ImageColumn::make('background')->label('BACKGROUND'),
                TextColumn::make('created_at')->label('Created At') // Menampilkan tanggal pembuatan
                    ->dateTime(), // Format tanggal dan waktu
                TextColumn::make('is_active')
                    ->label('Status') // Menampilkan status aktif
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'not_active' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Menambahkan aksi untuk mengedit
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Menambahkan aksi untuk menghapus bulk
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Daftar relasi yang bisa ditambahkan di sini
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBackgrounds::route('/'),
            'create' => Pages\CreateBackground::route('/create'),
            'edit' => Pages\EditBackground::route('/{record}/edit'),
        ];
    }
}
