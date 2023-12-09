<?php

namespace App\Filament\Resources\WartaParokiResource\Pages;

use App\Filament\Resources\WartaParokiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWartaParoki extends EditRecord
{
    protected static string $resource = WartaParokiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
