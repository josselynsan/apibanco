<?php

namespace App\Http\Controllers;

Use App\Models\Cuenta;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CuentasController extends Controller
{

    public function store(Request $request)
    {
        $cuenta = Cuenta::create($request->all());

        return response()->json($cuenta, 201);
    }


    public function show(Cuenta $cuenta)
    {
        return $cuenta;
    }


    public function update(Request $request, Cuenta $cuenta)
    {
        $cuenta->update($request->all());

        return response()->json($cuenta, 200);
    }


    public function update01(Request $request, Cuenta $cuenta)
    {


        //$cuenta->update($request->all());

        $numcue = $request->get('id');
        $tipdoc = $request->get('tipdoc');
        $numdoc = $request->get('numdoc');
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $valape = $request->get('valape');
        $tipest = $request->get('tipest');

        
        $sql = "select * from CUENTAS where ID = $numcue";
        $rq = "0";
        $cuenta = DB::select($sql);

        if($cuenta[0]->valape <> $valape){

                $sql = "select count(*) as a from movimientos where numcue = $numcue";
                $rq = "0";
                $cuenta = DB::select($sql);
                
                if($cuenta[0]->a == 0){


                    $sql = "update cuentas set tipdoc = '$tipdoc', numdoc = '$numdoc', nombre = '$nombre', apellido = '$apellido', valape = '$valape', valsal = '$valape', tipest = '$tipest' where id = '$numcue'";
                    DB::update("$sql");
                    $rq = "0";
                    $hola = "SE ACTUALIZO A SATISFACCION LA CUENTA";
                    return response()->json($hola, 200);

                } else {

                    $hola = "NO SE PUEDE MODIFICAR EL VALOR DE APERTURA, EXISTEN MOVIMIENTOS";
                    return response()->json($hola, 200);

                }
            } else {
                $sql = "update cuentas set tipdoc = '$tipdoc', numdoc = '$numdoc', nombre = '$nombre', apellido = '$apellido', valape = '$valape', valsal = '$valape', tipest = '$tipest' where id = '$numcue'";
                DB::update("$sql");
                $rq = "0";
                $hola = "SE ACTUALIZO A SATISFACCION LA CUENTA";
                return response()->json($hola, 200);

            }


    }


    public function index01(Request $request)
    {

	$l = 0;
	$criterio1 = "";
	
	//$numcue = $request->get('numcue');
	$tipdoc = $request->get('tipdoc');
	$numdoc = $request->get('numdoc');
	$nombre = $request->get('nombre');
	$apellido = $request->get('apellido');
	$tipest = $request->get('tipest');




/*
                            $str = $numcue;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {

                                    $criterio1 = $criterio1 . " and numcue like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where numcue like '$str'";

                                }

                                $l = $l + 1;

                            }

*/

                            $str = $tipdoc;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0 || $str == 0 ) {
                            } else {

                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and tipdoc = " . $str;
                                } else {
                                    $criterio1 = $criterio1 . " where tipdoc = " . $str;
            
                                }
            
                                $l = $l + 1;
            
                            }


                            $str = $numdoc;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and numdoc like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where numdoc like '$str'";
            
                                }
            
                                $l = $l + 1;
            
                            }


                            $str = $nombre;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and nombre like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where nombre like '$str'";
            
                                }
            
                                $l = $l + 1;
            
                            }


                            $str = $apellido;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and apellido like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where apellido like '$str'";
            
                                }
            
                                $l = $l + 1;
            
                            }


                            $str = $tipest;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0 || $str == 0 ) {
                            } else {

                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and tipest = " . $str;
                                } else {
                                    $criterio1 = $criterio1 . " where tipest = " . $str;
            
                                }
            
                                $l = $l + 1;
            
                            }




                            if ($l <> 0) {
        
                                $sql = "select * from cuentas " . $criterio1 ." order by id asc";
                                $rq = "1";
        
                            } else {
        
                                $sql = "select * from cuentas  order by id asc";
                                $rq = "0";
        
                            }



        //$sql = "SELECT * FROM usuarios where email = '$email' and clave = '$clave'";
        $cuenta = DB::select($sql);

        	return response()->json($cuenta, 200);




    }


    public function index02(Request $request)
    {

	$l = 0;
	$criterio1 = "";
	
	$numcue = $request->get('numcuenta');
	$numdoc = $request->get('numdoc');




                            $str = $numcue;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0 || $str == 0 ) {
                            } else {

                                if ($l <> 0) {

                                    $criterio1 = $criterio1 . " and id = " . $str;
                                } else {
                                    $criterio1 = $criterio1 . " where id = " . $str;

                                }

                                $l = $l + 1;

                            }




                            $str = $numdoc;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0) {
                            } else {

                                $str = "%".$str."%";
                                if ($l <> 0) {
            
                                    $criterio1 = $criterio1 . " and numdoc like '$str'";
                                } else {
                                    $criterio1 = $criterio1 . " where numdoc like '$str'";
            
                                }
            
                                $l = $l + 1;
            
                            }



                            if ($l <> 0) {

                                $sql = "select count(*) as id from cuentas " . $criterio1 ." and tipest = 1 order by id asc";
                                $rq = "1";
                                $cuenta01 = DB::select($sql);

                                if($cuenta01[0]->id == 0){
                                    $hola = 0;
                                    return response()->json($cuenta01, 200);
                                } else {
                                    $sql = "select * from cuentas " . $criterio1 ." and tipest = 1 order by id asc";
                                    $rq = "1";
                                    $cuenta02 = DB::select($sql);
                                    return response()->json($cuenta02, 200);
                                }

                            } else {

                                $hola = 0;
                                return response()->json($hola, 200);
                        
                            }









    }


    
    //
}
