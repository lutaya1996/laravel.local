<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    use HasFactory;

//    protected $with = ['image', 'category', 'author', 'comments', 'tags' ];


    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class)->withDefault([
            'name' => 'Категория',
        ]);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class)->withDefault([
            'name' => 'Автор',
            'profession' => 'Автор'
        ]);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
