<?php

namespace App\Filament\Resources\ListingTags\Pages;

use App\Filament\Resources\ListingTags\ListingTagResource;
use Filament\Resources\Pages\CreateRecord;

class CreateListingTag extends CreateRecord
{
    protected static string $resource = ListingTagResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
