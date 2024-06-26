<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory; 
    protected $fillable = ['titulo', 'isbn', 'ano_publicao', 'auto_id', 'biblioteca_id'];

    public function autor() {
        return $this->belongsTo(Autor::class);
    }

    public function biblioteca() {
        return $this->belongsTo(Biblioteca::class);
    }
}
