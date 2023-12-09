<?php

namespace App\Filament\Resources\TechFunctionResource\Pages;

use App\Filament\Resources\TechFunctionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTechFunction extends ViewRecord
{
    protected static string $resource = TechFunctionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
