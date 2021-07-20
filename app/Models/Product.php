<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getSubCategory()
    {
        return $this->belongsTo('App\Models\SubCategory', 'subCategory_id', 'id');
    }

    public function get_multiple_images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
}
