<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion de uno a muchos
    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
}
