<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function libros()
    {
        return $this->belongsToMany(Libro::class, 'libro_categorias', 'categoria_id', 'libro_id');
    }
}
