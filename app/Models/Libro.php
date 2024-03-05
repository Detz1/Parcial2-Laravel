<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'autor_id', 'categoria_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function resenas()
    {
        return $this->hasMany(Resena::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'libro_categorias', 'libro_id', 'categoria_id');
    }
}
