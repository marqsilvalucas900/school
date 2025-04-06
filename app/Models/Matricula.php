<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Aluno;
use App\Models\Turma;

class Matricula extends Model
{
    use HasFactory;
    protected $table = 'matriculas';
    protected $fillable = [
        'aluno_id',
        'turma_id',
        'data_matricula'
    ];

    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id', 'id');
    }

    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id', 'id');
    }
}
