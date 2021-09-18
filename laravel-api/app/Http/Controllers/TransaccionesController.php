<?php

namespace App\Http\Controllers;

Use App\Models\Ttransacciones;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TransaccionesController extends Controller
{

    public function indexttransacciones()
    {
        return Ttransacciones::all();
    }

    //
}
