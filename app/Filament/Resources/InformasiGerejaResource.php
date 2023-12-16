<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\InformasiGereja;
use Filament\Resources\Resource;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InformasiGerejaResource\Pages;
use App\Filament\Resources\InformasiGerejaResource\RelationManagers;

class InformasiGerejaResource extends Resource
{
    protected static ?string $model = InformasiGereja::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Judul')->required(),
                DateTimePicker::make('TanggalUpload')->required(),
                RichEditor::make('Isi')->toolbarButtons(['bold', 'italic', 'underline', 'undo', 'redo', 'h2', 'h3', 'bulletList', 'orderedList', 'codeBlock', ])->required(),
                FileUpload::make('images')->directory('attachments')->visibility('private')->preserveFilenames()->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend(now()->timestamp);}),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Judul')->sortable()->searchable(),
                TextColumn::make('Isi')->limit(50),
                TextColumn::make('TanggalUpload')->sortable()->searchable(), 
                ImageColumn::make('images')
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
            'index' => Pages\ListInformasiGerejas::route('/'),
            'create' => Pages\CreateInformasiGereja::route('/create'),
            'edit' => Pages\EditInformasiGereja::route('/{record}/edit'),
        ];
    }    
}
