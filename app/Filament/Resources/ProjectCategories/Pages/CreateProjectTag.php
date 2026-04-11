<?php

namespace App\Filament\Resources\ProjectCategories\Pages;

use App\Filament\Resources\ProjectCategories\ProjectCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProjectTag extends CreateRecord
{
    protected static string $resource = ProjectCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
