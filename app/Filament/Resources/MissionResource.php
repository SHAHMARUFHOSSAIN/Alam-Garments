<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MissionResource\Pages;
use App\Models\Mission;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;

class MissionResource extends Resource
{
    protected static ?string $model = Mission::class;

    protected static ?string $navigationLabel = 'Mission';
    protected static ?string $navigationIcon = 'heroicon-o-flag';
    protected static ?string $navigationGroup = 'About'; // Optional: sidebar group

    // ------------------------------
    // Form
    // ------------------------------
    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->label('Mission Title'),

            RichEditor::make('description')
                ->label('Mission Description')
                ->toolbarButtons([
                    'bold', 'italic', 'underline', 'strike', 
                    'bulletList', 'orderedList', 'h2', 'h3', 'link'
                ])
                ->columnSpanFull(),

            FileUpload::make('image')
                ->image()
                ->directory('missions')
                ->imagePreviewHeight('150'),

            Toggle::make('is_active')
                ->label('Active')
                ->default(true),

            Repeater::make('points')
                ->relationship()
                ->label('Mission Points')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->label('Point Title'),
                    RichEditor::make('description')
                        ->label('Point Description'),
                ])
                ->orderColumn('order')
                ->reorderable()
                ->collapsible()
                ->createItemButtonLabel('Add Point'),
        ]);
    }

    // ------------------------------
    // Table
    // ------------------------------
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Mission Title'),

                TextColumn::make('description')
                    ->limit(50)
                    ->label('Mission Description'),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At'),

                ImageColumn::make('image')->width(60)    
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

    // ------------------------------
    // Relations
    // ------------------------------
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    // ------------------------------
    // Pages
    // ------------------------------
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMissions::route('/'),
            'create' => Pages\CreateMission::route('/create'),
            'edit' => Pages\EditMission::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
{
    return auth()->check() &&
        in_array(auth()->user()->role, ['superadmin', 'admin']);
}

}