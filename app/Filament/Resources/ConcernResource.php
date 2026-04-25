<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConcernResource\Pages;
use App\Filament\Resources\ConcernResource\RelationManagers;
use App\Models\Concern;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\{Section, TextInput, FileUpload, Textarea, Repeater};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConcernResource extends Resource
{
    protected static ?string $model = Concern::class;

    protected static ?string $navigationLabel = 'Concerns';
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
{
    return $form->schema([

        Section::make('Basic Info')->schema([
            TextInput::make('name')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', \Str::slug($state))
                ),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            FileUpload::make('logo')
                ->image()
                ->directory('logos'),

            Textarea::make('short_description'),

            Textarea::make('about')->rows(6),
        ]),

        Section::make('Files')->schema([
            FileUpload::make('pdf')
                ->directory('pdfs')
                ->acceptedFileTypes(['application/pdf']),
        ]),

        Section::make('Contact')->schema([
            TextInput::make('phone'),
            TextInput::make('email'),
            TextInput::make('address'),
        ]),

        Section::make('Location')->schema([
            Textarea::make('location'),
        ]),

        Section::make('Links')->schema([
            Repeater::make('links')
                ->schema([
                    TextInput::make('name'),
                    TextInput::make('url'),
                ])
                ->columns(2),
        ]),
    ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('short_description')
                ->limit(50) // short preview
                ->html(), // because RichEditor content

            TextColumn::make('location')
                ->sortable(),
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
        \App\Filament\Resources\ConcernResource\RelationManagers\GalleriesRelationManager::class,
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConcerns::route('/'),
            'create' => Pages\CreateConcern::route('/create'),
            'edit' => Pages\EditConcern::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
{
    return auth()->check() &&
        in_array(auth()->user()->role, ['superadmin', 'admin']);
}

}
