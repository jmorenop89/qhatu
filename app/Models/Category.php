<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    public $table = 'category';

    public $fillable = [
        'name','description','parent',
        'image','slug','status'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
