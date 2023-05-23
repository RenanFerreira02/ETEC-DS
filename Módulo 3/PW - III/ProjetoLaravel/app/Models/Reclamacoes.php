<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reclamacoes extends Model
{
    // use HasFactory;
    protected $table = 'tbReclamacao';

    protected $fillable = [
        'id', 
        'idLab', 
        'pc', 
        'titulo', 
        'descricao', 
        'dtCriacao'
    ];

    public $timestamps = false;

    public function laboratorio() : BelongsTo
    {
        return $this->belongsTo(Laboratorio::class, 'idLab');
    }

}