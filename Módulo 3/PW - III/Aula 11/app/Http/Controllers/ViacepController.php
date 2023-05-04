<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FlyingLuscas\ViaCEP\ViaCEP;

class ViacepController extends Controller
{
    $viacep = new ViaCEP;

    $address = $viacep->findByZipCode('01001-000')->toArray();
}
