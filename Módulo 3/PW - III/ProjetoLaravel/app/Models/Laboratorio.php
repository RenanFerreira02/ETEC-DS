<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Laboratorio extends Model
{
    protected $table = 'tblaboratorio';
    protected $fillable = [
        'id',
        'Laboratorio'
    ];
    public $timestamps = false;

    public function laboratorios(): HasMany
    {
        return $this->hasMany(Reclamacoes::class, 'idLab');
    }

}
