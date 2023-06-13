<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class BlogSetting extends Settings
{

    public static function group(): string
    {
        return 'blog';
    }
}