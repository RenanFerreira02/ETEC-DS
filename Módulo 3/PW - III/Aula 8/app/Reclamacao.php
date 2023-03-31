<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    protected $table = "tbReclamacao";

    protected $fillable = ['idRec', 'idLab', 'PC', 'Titulo', 'Descricao', 'dtCriacao'];

    public $timestamps = false;
}
