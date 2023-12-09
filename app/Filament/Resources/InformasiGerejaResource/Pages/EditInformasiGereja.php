<?php

namespace App\Filament\Resources\InformasiGerejaResource\Pages;

use App\Filament\Resources\InformasiGerejaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiGereja extends EditRecord
{
    protected static string $resource = InformasiGerejaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
