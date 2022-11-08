<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    //Relacion de uno a muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    public function category(){
        return $this->belongsTo('App\Models\category');
    }
}
