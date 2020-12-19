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
        'slug',
        'price'
    ];

    public function getPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ', ', ' ') . ' €';
    }
}
