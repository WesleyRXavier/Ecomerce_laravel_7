<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use  App\models\Store;


class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'body',
        'price',
        'slug',

    ];

    public function store()
    {
        return $this->hasMany(Store::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
