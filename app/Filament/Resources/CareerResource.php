<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CareerResource\Pages;
use App\Filament\Resources\CareerResource\RelationManagers;
use App\Models\Career;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CareerResource extends Resource
{
    protected static ?string $model = Career::class;

    protected static ?string $navigationLabel = 'Careers';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),

RichEditor::make('description')
                ->label('Job Description')
                ->toolbarButtons([
                    'bold', 'italic', 'underline', 'strike', 
                    'bulletList', 'orderedList','h1', 'h2', 'h3', 'h4','link'
                ])
                ->columnSpanFull(),

TextInput::make('location'),
TextInput::make('employment_type'),
TextInput::make('experience_level'),
TextInput::make('salary_range'),

Select::make('status')
    ->options([
        'Active' => 'Active',
        'Closed' => 'Closed'
    ])
    ->default('Active'),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('title')
                ->searchable()
                ->sortable(),

            TextColumn::make('description')
                ->limit(50) // short preview
                ->html(), // because RichEditor content

            TextColumn::make('location')
                ->sortable(),

            TextColumn::make('employment_type'),

            TextColumn::make('experience_level'),

            TextColumn::make('salary_range'),
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
            'index' => Pages\ListCareers::route('/'),
            'create' => Pages\CreateCareer::route('/create'),
            'edit' => Pages\EditCareer::route('/{record}/edit'),
        ];
    }


public static function canViewAny(): bool
{
    $user = auth()->user();

    return $user && in_array($user->role, ['superadmin', 'admin', 'hr']);
}


}