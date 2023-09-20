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

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }
}
