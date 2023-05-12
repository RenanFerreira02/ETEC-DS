<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    protected $table = "tbReclamacao";

    protected $fillable = ['idRec', 'idLaboratorio', 'pc', 'titulo', 'descricao', 'dtCriacao'];

    public $timestamps = false;

}
