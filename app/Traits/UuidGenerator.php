<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait UuidGenerator
{
    public function scopeUuid($query, $uuid)
    {
        return $query->where($this->getUuidName(), $uuid);
    }

    public function getUuidName(): string
    {
        return property_exists($this, 'uuidName') ? $this->uuidName : 'uuid';
    }

    public static function bootUuidGenerator(): void
    {
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), $model->getUuidName())) {
                $model->{$model->getUuidName()} = Str::uuid();
            }
        });
    }
}
