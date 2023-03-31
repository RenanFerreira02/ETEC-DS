<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = "tbContato";

    protected $fillable = ['idContato', 'Nome', 'Tel', 'Email']; //Campos da tabela

    public $timestamps = false;
}
