<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;

class Frequencia extends Model
{
    use HasFactory;

    protected $table = 'frequencias';

    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'data',
        'status',
    ];

    /**
     * Relação com o modelo Aluno
     */
    public function aluno()
    {
        return $this->belongsTo(Aluno::class,'aluno_id','id');
    }

    /**
     * Relação com o modelo Disciplina
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class,'disciplina_id','id');
    }
}
