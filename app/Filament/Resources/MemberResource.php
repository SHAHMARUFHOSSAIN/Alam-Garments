<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Filament\Resources\MemberResource\RelationManagers;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationLabel = 'Team';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'About';

 
public static function form(Form $form): Form
{
    return $form
        ->schema([

            Forms\Components\TextInput::make('name')
                ->placeholder('Enter full name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('designation')
                ->placeholder('Enter designation (e.g. Developer, Manager)')
                ->required(),

            Forms\Components\TextInput::make('x_url')
                ->label('X (Twitter) URL')
                ->placeholder('https://x.com/username')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('fb_url')
                ->label('Facebook URL')
                ->placeholder('https://facebook.com/username')
                ->url()
                ->nullable(),

            Forms\Components\TextInput::make('in_url')
                ->label('Instagram URL')
                ->placeholder('https://linkedin.com/in/username')
                ->url()
                ->nullable(),

            Forms\Components\FileUpload::make('image')
                ->placeholder('Upload member photo')
                ->image()
                ->directory('members')
                ->nullable(),

            Forms\Components\Toggle::make('status')
                ->label('Active Status')
                ->helperText('Turn off to hide this member')
                ->default(true),

        ]);
}
    public static function table(Table $table): Table
{
    return $table
        ->columns([

            Tables\Columns\ImageColumn::make('image')
                ->label('Photo'),

            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('designation'),

            Tables\Columns\IconColumn::make('status')
                ->boolean(),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            ImageColumn::make('image')->width(60)    
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function shouldRegisterNavigation(): bool
{
    return auth()->check() &&
        in_array(auth()->user()->role, ['superadmin', 'admin']);
}

}
