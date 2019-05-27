<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //

    protected $fillable = [
        'firstname', 'lastname', 'ordernumber','testimonial','status',
    ];
}
