<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = "tblab";

    protected $fillable = ['idLab', 'Lab'];

    public $timestamps = false;
}
