<?php

namespace App\Http\Controllers;

Use App\Models\Tpagos;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PagosController extends Controller
{

    public function indextpagos()
    {
        return Tpagos::all();
    }

    //
}
