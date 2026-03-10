<?php

namespace App\Filament\Resources\ListingTags\Pages;

use App\Filament\Resources\ListingTags\ListingTagResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListListingTags extends ListRecords
{
    protected static string $resource = ListingTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
