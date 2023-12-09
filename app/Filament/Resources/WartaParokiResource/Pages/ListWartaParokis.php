<?php

namespace App\Filament\Resources\WartaParokiResource\Pages;

use App\Filament\Resources\WartaParokiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWartaParokis extends ListRecords
{
    protected static string $resource = WartaParokiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
