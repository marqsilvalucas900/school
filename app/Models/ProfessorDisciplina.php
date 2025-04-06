<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfessorDisciplina extends Model
{
    use HasFactory;
    protected $table = 'professores_disciplinas';
    protected $fillable = [
        'professores_id',
        'disciplina_id'
    ];

    
}
