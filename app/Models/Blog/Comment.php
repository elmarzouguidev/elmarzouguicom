<?php

namespace App\Models\Blog;

use App\Traits\GetModelByUuid;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    use UuidGenerator;
    use GetModelByUuid;

    protected $fillable = [
        'full_name',
        'email',
        'comment',
        'post_id',
        'active'
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
