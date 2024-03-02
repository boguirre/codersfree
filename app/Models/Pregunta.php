<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }
}
