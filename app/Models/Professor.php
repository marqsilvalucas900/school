<?php

namespace App\Models;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Professor extends Model
{
    use HasFactory;
    protected $table = 'professores';

    protected $fillable = [
        'nome',
        'disciplina_id',
        'contato',
    ];


    public function disciplina(){
        return $this->belongsToMany(Disciplina::class, 'professores_disciplinas','professores_id','disciplina_id');
    }
    
    

}
