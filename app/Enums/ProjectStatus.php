<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum ProjectStatus: string implements HasLabel
{
    case active = 'active';
    case inactive = 'inactive';
    case awaitingReview = 'awaiting-review';

    public static function default() : self
    {
        return self::awaitingReview;
    }

    public function getLabel(): string|Htmlable|null
    {
        return match ($this) {
            self::active => 'Active',
            self::inactive => 'Inactive',
            self::awaitingReview => 'Awaiting Review',
        };
    }
}
