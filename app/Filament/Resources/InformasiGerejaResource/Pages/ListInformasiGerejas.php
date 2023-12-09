<?php

namespace App\Filament\Resources\InformasiGerejaResource\Pages;

use App\Filament\Resources\InformasiGerejaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiGerejas extends ListRecords
{
    protected static string $resource = InformasiGerejaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
