<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\WartaParoki;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WartaParokiResource\Pages;
use App\Filament\Resources\WartaParokiResource\RelationManagers;

class WartaParokiResource extends Resource
{
    protected static ?string $model = WartaParoki::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Judul')->required(),
                DateTimePicker::make('TanggalUpload')->required(),
                Textarea::make('Isi')->required(),
                // FileUpload::make('attachment')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Judul')->sortable()->searchable(),
                TextColumn::make('Isi')->limit(50),
                TextColumn::make('TanggalUpload')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWartaParokis::route('/'),
            'create' => Pages\CreateWartaParoki::route('/create'),
            'edit' => Pages\EditWartaParoki::route('/{record}/edit'),
        ];
    }    
}
