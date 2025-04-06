<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Sala;
use App\Models\Periodo;

class Turma extends Model
{
    use HasFactory;
    
    protected $table = "turmas";
    protected $fillable = [
        'periodo_id',
        'sala_id'
    ];


    public function periodo(){
        return $this->belongsTo(Periodo::class,'periodo_id','id');
    }

    public function sala(){
        return $this->belongsTo(Sala::class,'sala_id','id');
    }

}
