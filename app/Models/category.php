<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //Relacion de uno a muchos

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }

    public function subcategories(){
        return $this->hasMany('App\Models\Subcategory');
    }
}
