<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    //para não preencher os campos padrões de created_at...
    public $timestamps = false;

    protected $fillable = ['name', 'codigo'];
}
