<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    /**
     * Relação com o modelo Professor
     */
    public function professores()
    {
        return $this->belongsToMany(\App\Models\Professor::class,'professores_disciplinas','disciplina_id','professores_id');
    }
}
