<?php

namespace App\Filament\Resources\TechFunctionResource\Pages;

use App\Filament\Resources\TechFunctionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechFunction extends EditRecord
{
    protected static string $resource = TechFunctionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
