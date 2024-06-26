<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco'];

    public function livros(){
        return $this->hasMany(Livro::class);
    }
}
