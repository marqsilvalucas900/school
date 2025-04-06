<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disciplina;
use App\Models\Aluno;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';

    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'tipo_avaliacao',
        'nota',
        'data_avaliacao',
    ];

    /**
     * Relação com o modelo Aluno
     */
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id', 'id');
    }

    /**
     * Relação com o modelo Disciplina
     */
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplina_id', 'id');
    }
}