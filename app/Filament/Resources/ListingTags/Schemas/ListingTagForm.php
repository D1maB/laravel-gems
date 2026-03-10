<?php

namespace App\Filament\Resources\ListingTags\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ListingTagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
