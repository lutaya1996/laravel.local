<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [

        'icon_class','title',

        'description',

    ];

    use HasFactory;
}
