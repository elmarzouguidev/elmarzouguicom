<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSetting extends Settings
{

    public static function group(): string
    {
        return 'site';
    }
}