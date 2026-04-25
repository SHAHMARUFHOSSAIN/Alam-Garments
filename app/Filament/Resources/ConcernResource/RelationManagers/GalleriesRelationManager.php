<?php

namespace App\Filament\Resources\ConcernResource\RelationManagers;

use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables;

class GalleriesRelationManager extends RelationManager
{
    protected static string $relationship = 'galleries';

    protected static ?string $title = 'Gallery Images';

    

    public function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('image')
                ->image()
                ->directory('gallery')
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->size(80)
                    ->square(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add Photo'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}