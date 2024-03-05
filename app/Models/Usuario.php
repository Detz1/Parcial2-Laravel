<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'libro_id'];

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
