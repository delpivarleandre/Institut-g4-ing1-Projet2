<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];  
    
    protected $table = 'products';
    public $timestamps = true;


    protected $fillable = [
        'title',
        'image',
        'price'
    ];

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function getPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ', ', ' ') . ' €';
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable')->latest();
    }
}
