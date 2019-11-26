<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';

    public $fillable = ['name','price',
        'description','stock','category_id'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
