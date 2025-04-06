<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periodo extends Model
{
    use HasFactory;
    protected $table = 'periodos';
    protected $fillable = [
        'ano',
        'descricao'
    ];

    public function turma(){
        return $this->hasMany(Turma::class,'periodo_id','id');
    }

      
    
}
