<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Definimos la tabla a la que hace referencia este modelo
    //  protected $table = 'cursos';

    // Definimos los campos que se pueden rellenar
    // protected $fillable = ['name', 'description', 'categoria'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
