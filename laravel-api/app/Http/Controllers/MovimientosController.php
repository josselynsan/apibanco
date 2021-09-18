<?php

namespace App\Http\Controllers;

Use App\Models\Movimientos;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MovimientosController extends Controller
{


    public function insert01(Request $request)
    {


        //$cuenta->update($request->all());

        $numcue = $request->get('numcue');
        $tiptra = $request->get('tiptra');
        $tippag = $request->get('tippag');
        $numpag = $request->get('numpag');
        $codusu = $request->get('codusu');
        $valtra = $request->get('valtra');
        $tipest = $request->get('tipest');



        $sql = "insert into movimientos (numcue, valtra, tiptra, codusu, tippag, numpag, tipest) values ('$numcue', '$valtra', '$tiptra', '$codusu', '$tippag', '$numpag', '$tipest') ";
        DB::insert("$sql");
        $rq = "0";
        $hola = "SE AGREGO EL REGISTRO";
        return response()->json($hola, 200);


    }


    public function index01(Request $request)
    {

	$l = 0;
	$criterio1 = "";
	
	$numcue = $request->get('numcuenta');
	$tipest = $request->get('tipest');




                            $str = $numcue;
                            if (!isset($str) || trim($str) === '' || strlen($str) == 0 || $str == 0 ) {
                            } else {

                                if ($l <> 0) {

                                    $criterio1 = $criterio1 . " and numcue = " . $str;
                                } else {
                                    $criterio1 = $criterio1 . " where numcue = " . $str;

                                }

                                $l = $l + 1;

                            }



                            if ($l <> 0) {

                                $sql = "select count(*) as id from movimientos " . $criterio1 ." and tipest = 1 order by id asc";
                                $rq = "1";
                                $cuenta01 = DB::select($sql);

                                if($cuenta01[0]->id == 0){
                                    $hola = 0;
                                    return response()->json($cuenta01, 200);
                                } else {
                                    $sql = "select * from movimientos " . $criterio1 ." and tipest = 1 order by id asc";
                                    $rq = "1";
                                    $cuenta02 = DB::select($sql);
                                    return response()->json($cuenta02, 200);
                                }

                            } else {

                                $hola = 0;
                                return response()->json($hola, 200);
                        
                            }









    }


    public function delete01(Request $request, Movimientos $cuenta)
    {


        //$cuenta->update($request->all());

        $id = $request->get('id');
        
        $sql = "select count(*) as a from movimientos where id = $id and tipest = 1";
        $rq = "0";
        $cuenta = DB::select($sql);

        if($cuenta[0]->a > 0){

                $sql = "delete from movimientos where id = $id and tipest = 1";
                $rq = "0";
                $cuenta = DB::delete($sql);
                $hola = "MOVIMIENTO REMOVIDO";
                return response()->json($hola, 200);
            
            } else {
                $hola = "NO SE PUEDE REMOVER EL MOVIMIENTO";
                return response()->json($hola, 200);

            }


    }


    public function index02(Request $request)
    {

	$l = 0;
	$criterio1 = "";
	
	$numcue = $request->get('numcuenta');
	$codusu = $request->get('codusu');


    $sql = "select sum(valtra) as a from movimientos where numcue = $numcue and codusu = $codusu and tiptra = 1 and tipest = 1";
    $cuenta01 = DB::select($sql);
    $ingreso = $cuenta01[0]->a;


    $sql = "select sum(valtra) as a from movimientos where numcue = $numcue and codusu = $codusu and tiptra = 2 and tipest = 1";
    $cuenta01 = DB::select($sql);
    $egreso = $cuenta01[0]->a;


    $Totaltransaccion = $ingreso - $egreso;

    return response()->json($Totaltransaccion, 200);





    }

    public function update02(Request $request)
    {


        //$cuenta->update($request->all());

        $numcue = $request->get('id');
        $codusu = $request->get('codusu');

        
        $sql = "select count(*) as a from movimientos where numcue = $numcue and codusu = $codusu and tipest = 1";
        $cuenta = DB::select($sql);

        //return response()->json($cuenta, 200);

        

        if($cuenta[0]->a > 0){


            $sql = "select sum(valtra) as b from movimientos where numcue = $numcue and codusu = $codusu and tiptra = 1 and tipest = 1";
            $cuenta01 = DB::select($sql);
            $ingreso = $cuenta01[0]->b;
        
        
            $sql = "select sum(valtra) as b from movimientos where numcue = $numcue and codusu = $codusu and tiptra = 2 and tipest = 1";
            $cuenta01 = DB::select($sql);
            $egreso = $cuenta01[0]->b;
        
        
            $Totaltransaccion = $ingreso - $egreso;

            
            $sql = "select valsal as b from cuentas where id = $numcue";
            $cuenta01 = DB::select($sql);

            $saldoact = $cuenta01[0]->b;

            $saldofinal = $saldoact + $Totaltransaccion;


            $sql = "update cuentas set valsal = '$saldofinal' where id = $numcue";
            DB::update("$sql");

            $sql = "update movimientos set tipest = 2 where numcue = $numcue and codusu = $codusu and tipest = 1";
            DB::update("$sql");

            $rq = "0";
            $hola = "SE CERRO A SATISFACCION LA TRANSACCION";
            return response()->json($hola, 200);
        }
        

    }




    //
}
