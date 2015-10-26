<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url','shop_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function shop(){
    	return $this->belongsTo('App\Shop');
    }
}
