<?php

namespace App\Models\Blog;

use App\Traits\GetModelByUuid;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Seo extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;

    protected $fillable = [
        'meta_title',
        'meta_url',
        'meta_description',
        'meta_keywords',
        'meta_robos',

        'og_title',
        'og_sitename',
        'og_description',
        'og_type',
        'og_url',
        'og_local',
        'og_image',
        'og_data',
        'og_property',

        'twitter_card',
        'twitter_site',
        'twitter_title',
        'twitter_description',
        'twitter_image',

        'is_default'
    ];

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
