<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Sala extends Model
{
    use HasFactory;
    
    protected $table = 'salas';
    protected $fillable = [
        'nome',
        'capacidade',
        'localizacao',
    ];

    public function turmas(){
        return $this->hasMany(Turma::class, 'sala_id', 'id');
    }



}
