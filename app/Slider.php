<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     protected $table = 'slider';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
