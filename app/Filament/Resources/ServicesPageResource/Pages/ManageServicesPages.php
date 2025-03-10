<?php

namespace App\Filament\Resources\ServicesPageResource\Pages;

use App\Filament\Resources\ServicesPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServicesPages extends ManageRecords
{
    protected static string $resource = ServicesPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
