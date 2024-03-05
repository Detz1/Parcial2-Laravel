<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;

    protected $fillable = ['libro_id', 'contenido'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
