<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $table = 'Tareas';

    protected $fillable = [
        'titulo',
        'contenido',
        'estado',
        'autor'
    ];

}