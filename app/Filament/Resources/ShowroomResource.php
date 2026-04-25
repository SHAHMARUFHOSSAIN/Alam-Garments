<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowroomResource\Pages;
use App\Filament\Resources\ShowroomResource\RelationManagers;
use App\Models\Showroom;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowroomResource extends Resource
{
    protected static ?string $model = Showroom::class;

    protected static ?string $navigationLabel = 'Showroom';
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

   public static function form(Form $form): Form
{
    return $form->schema([

        TextInput::make('name')->required(),

        TextInput::make('title'),

        Textarea::make('description'),

        TextInput::make('location'),

        TextInput::make('contact'),

        TextInput::make('video_url'),

        FileUpload::make('images')
            ->multiple()
            ->image()
            ->disk('public')
            ->directory('showrooms'),

    ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('id')->sortable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('description')->limit(50),
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('created_at')->dateTime()->sortable(),
                 TextColumn::make('location'),
            ])
            ->filters([
                //
            ])
           ->actions([
    \Filament\Tables\Actions\EditAction::make()
        ->label('Update')
        ->icon('heroicon-o-pencil-square')
        ->color('success')
        ->button()
        ->outlined(),

    \Filament\Tables\Actions\DeleteAction::make()
        ->label('Delete')
        ->icon('heroicon-o-trash')
        ->color('danger')
        ->requiresConfirmation()
        ->button(),

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
            'index' => Pages\ListShowrooms::route('/'),
            'create' => Pages\CreateShowroom::route('/create'),
            'edit' => Pages\EditShowroom::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
{
    return auth()->check() &&
        in_array(auth()->user()->role, ['superadmin', 'admin']);
}

}
