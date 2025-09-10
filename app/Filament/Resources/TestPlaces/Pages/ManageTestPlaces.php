<?php

namespace App\Filament\Resources\TestPlaces\Pages;

use App\Filament\Resources\TestPlaces\TestPlaceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageTestPlaces extends ManageRecords
{
    protected static string $resource = TestPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
