<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'type',
        'type_id',
        'meta_keywords',
        'meta_description',
    ];
}
