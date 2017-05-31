<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';

    protected $fillable = [
        'keyword', 'category', 'valid', 'hoax', 'unknown',
    ];
}
