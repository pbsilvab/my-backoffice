<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $table = 'rates';

    public $fillable = [
        'positive',
        'negative',
        'regular'
    ];
}
