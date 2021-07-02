<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];

    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'added_by', 'id');
    }

    public function getSubCategory()
    {
        return $this->hasMany('App\Models\SubCategory');
    }

}
