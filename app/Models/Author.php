<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Author extends Model
{
    use HasFactory;

    public $fillable = [

        'name', 'profession',

        'articles_id',

    ];

    protected $with = ['articles'];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
