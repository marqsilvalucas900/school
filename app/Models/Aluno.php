<?php

namespace App\Models;

use App\Models\Frequencia;
use App\Models\Nota;
use App\Models\Matricula;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aluno extends Model{

    use HasFactory; 

    protected $table = 'alunos';
    protected $fillable = [
        'nome',
        'data_nascimento',
        'contato'
    ];

    public function frequencias(){
        return $this->hasMany(Frequencia::class, 'aluno_id', 'id');    
    }

    public function notas(){
        return $this->hasMany(Nota::class, 'aluno_id', 'id');    
    }

    public function matricula(){
        return $this->hasOne(Matricula::class, 'aluno_id', 'id');  // Relacionamento 1:1
    }
}
