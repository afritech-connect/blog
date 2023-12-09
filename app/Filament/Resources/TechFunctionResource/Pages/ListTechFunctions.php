<?php

namespace App\Filament\Resources\TechFunctionResource\Pages;

use App\Filament\Resources\TechFunctionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechFunctions extends ListRecords
{
    protected static string $resource = TechFunctionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
