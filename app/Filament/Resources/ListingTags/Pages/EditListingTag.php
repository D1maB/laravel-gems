<?php

namespace App\Filament\Resources\ListingTags\Pages;

use App\Filament\Resources\ListingTags\ListingTagResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditListingTag extends EditRecord
{
    protected static string $resource = ListingTagResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            //DeleteAction::make(),
        ];
    }
}
