<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Filament\Resources\HistoryResource\RelationManagers;
use App\Models\History;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationLabel = 'History';
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'About';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->required(),

            Forms\Components\TextInput::make('year')
                ->numeric()
                ->required()
                ->maxLength(4),

            Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('history-images')
                ->nullable(),
        ]);
}

   public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('year')->sortable(),
            Tables\Columns\TextColumn::make('description')->limit(50),
            Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
{
    return auth()->check() &&
        in_array(auth()->user()->role, ['superadmin', 'admin']);
}

}
