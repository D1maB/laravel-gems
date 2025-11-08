<?php

namespace App\Enums;

enum ListingStatus: string
{
    case active = 'active';
    case inactive = 'inactive';
    case awaitingReview = 'awaiting-review';

    public static function default() : self
    {
        return self::awaitingReview;
    }
}
