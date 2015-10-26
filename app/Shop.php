<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'district', 'city', 'phone', 'main_image', 'price', 'information', 'open_time', 'close_time'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function images(){
        return $this->hasMany('App\Image');
    }
}
