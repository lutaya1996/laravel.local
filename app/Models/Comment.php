<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    public $fillable = [

        'image_path', 'user_name',

        'text',

    ];

    protected $with = ['article', 'user'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
