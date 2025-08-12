<?php

namespace App\Filament\Resources\RegionCityResource\Pages;

use App\Filament\Resources\RegionCityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegionCity extends EditRecord
{
    protected static string $resource = RegionCityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
