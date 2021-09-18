<?php

namespace App\Http\Controllers;

Use App\Models\Testados;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TestadosController extends Controller
{

    public function indextestados()
    {
        return Testados::all();
    }

    //
}
