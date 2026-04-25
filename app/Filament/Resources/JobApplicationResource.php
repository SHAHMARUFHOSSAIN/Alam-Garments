<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobApplicationResource\Pages;
use App\Filament\Resources\JobApplicationResource\RelationManagers;
use App\Models\JobApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobApplicationResource extends Resource
{
    protected static ?string $model = JobApplication::class;

    protected static ?string $navigationLabel = 'Jobs';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([

            TextColumn::make('name')->searchable(),
            TextColumn::make('email')->searchable(),
            TextColumn::make('career.title')->label('Job')->searchable(),

            TextColumn::make('cv')
                ->label('CV')
                ->formatStateUsing(fn () => 'Download')
                ->url(fn ($record) => asset('storage/' . $record->cv))
                ->openUrlInNewTab(),

        ])
       
           ->actions([
            

            \Filament\Tables\Actions\DeleteAction::make()
                ->color('danger')
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
            'index' => Pages\ListJobApplications::route('/'),
            'create' => Pages\CreateJobApplication::route('/create'),
            'edit' => Pages\EditJobApplication::route('/{record}/edit'),
        ];
    }


public static function canViewAny(): bool
{
    $user = auth()->user();

    return $user && in_array($user->role, ['superadmin', 'admin', 'hr']);
}



}