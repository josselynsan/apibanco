<?php

namespace App\Http\Controllers;

Use App\Models\Tdocumentos;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class TdocumentosController extends Controller
{
    public function indextdocumentos()
    {
        return Tdocumentos::all();
    }

    //
}
