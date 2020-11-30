<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'name',
        'image',
        'description'        
    ];

    public function categories() {
        return $this->hasMany('App\Game');
    }
}
