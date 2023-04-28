<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = "tblaboratorio";

    protected $fillable = ['idLaboratorio', 'laboratorio'];

    public $timestamps = false;
}
