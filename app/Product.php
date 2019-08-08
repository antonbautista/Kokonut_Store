<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 
    protected $fillable = [
        'id','product_name', 'description', 'total',
    ];

    protected $hidden = [
        //'id'
    ];

    public function scopeProductos($query){
	    return $query->select()
	                  ->get();
    }

}
