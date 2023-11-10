<?php

namespace App\Traits;

use Illuminate\Support\Facades\Artisan;
use Spatie\ResponseCache\Facades\ResponseCache;
trait CacheCleaner
{
    public static function bootCacheCleaner()
    {
        self::created(function () {
            Artisan::call('cache:clear');
            ResponseCache::clear();
        });

        self::updated(function () {
            Artisan::call('cache:clear');
            ResponseCache::clear();
        });

        self::deleted(function () {
            Artisan::call('cache:clear');
            ResponseCache::clear();
        });
    }
}
