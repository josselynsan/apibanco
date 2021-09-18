<?php
    session_start(); 


$_SESSION['user'] = "josselynsanchez@yahoo.es";
$_SESSION['codusu'] = 2;

?>


<?php
        header("Content-Type: text/html;charset=utf-8");        

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--Hojas de Estilo -->    
        <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js'></script>
        <link href='https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>        
        <!--Archivos de javascript -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">        
    
        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <!-- <script src="axios/dist/axios.min.js"></script> -->
        

        
        <title>Movimientos financieros</title>
    </head>
    <body  onload="getalltiptra(), getalltippag()">





        <main class="container">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Movimientos financieros</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="menu04.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                        </li>                        
                    </ul>
                </div>

                <form class="form-inline" action="login02.php">
                    <a href="#"><i class="fa fa-user-circle mr-sm-2" aria-hidden="true"></i><?php echo $_SESSION['user'] ?></a>
                    <button class="btn btn-outline-danger my-2 my-sm-0 ml-2" type="submit">Log out</button>
                </form>

            </nav>





        </main>    



        <div class="container">
            <div class="row">
                <div class="col-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                            <nav class="navbar navbar-dark bg-primary">
                                <a class="navbar-brand" href="#"><h4>Registro de movimientos financieros</h4></a>
                            </nav>                                

                            </tr>
                            </thead>
                        </table>   
                </div>
            </div>
        </div>


                    



    </body>

    
    
</html>


<!-- Modal  NO ERROR-->
<div class="modal fade" id="modalEventosError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
      <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
            <p class="heading lead" id="tituloError"></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>


            <div class="modal-body">
                    <div class="container">
                        <div class="form-row">
                            <div class="col-sm">
                                <th scope="col" colspan="1" class="text-center">
                                    <div class="form-group">
                                        <h5 class="modal-title" id="mensajeError1"></h5>
                                        <h5 class="modal-title" id="mensajeError2"></h5>
                                        <h5 class="modal-title" id="mensajeError3"></h5>
                                        <br>
                                        <img  src=""   id="imagenError_url" class="card-img-top"    alt="..."  >
                                    </div>
                                </th>
                            </div>
                        </div>
                    </div>    
            </div>

            <div class="modal-footer">
            </div>
      </div>
    </div>
</div>






                                                    <!-- Start Sevtion-Usuarios -->
                                                    <section class="">
                                                        <!-- Container-fluid starts -->
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!-- Authentication card start -->

                                                                        <form class="md-float-material form-material">
                                                                            <div class="">
                                                                                <div class="card-block">
                                                                                    <h5>Datos del movimiento</h5>
                                                                                    <div  id="" class="">
                                                                                        <nav class="navbar navbar-light" style="background-color: #4169E1 ;">
                                                                                        </nav>
                                                                                    </div>
                                                                                    <br>

                                                                                    <input type="hidden" name="id_movimiento" id="id_movimiento" class="form-control">
                                                                                    <div class="row m-b-20">
                                                                                        <div class="col-md-4">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                      <input type="text" name="numcuenta" id="numcuenta" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                        <label>Numero de cuenta bancaria</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="numdoc" id="numdoc" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                        <label>Numero de documento del cliente</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                        </div>



                                                                                        <div class="col-md-4">
                                                                                          <div class="row m-t-30 d-flex justify-content-center">
                                                                                            <div class="col-md-12 mx-2" id="btnbuscar">
                                                                                                <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="getUsuarios('<?php echo $_SESSION['codusu'] ?>')">Buscar</button>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>

                                                                                    </div>

                                                                                    <h5>Datos de la transaccion</h5>
                                                                                    <div  id="" class="">
                                                                                        <nav class="navbar navbar-light" style="background-color: #4169E1 ;">
                                                                                        </nav>
                                                                                    </div>
                                                                                    <br>

                                                                                    <div class="row m-b-20">
                                                                                        <div class="col-md-3">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                      <input type="text" name="numcuentaact" id="numcuentaact" class="form-control border border-primary" disabled>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label>Numero de cuenta - Actual</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="numdocact" id="numdocact" class="form-control border border-primary" disabled>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label>Numero de documento - Actual</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="nomape" id="nomape" class="form-control border border-primary" disabled>
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label>Nombres y apellidos</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="row m-b-20">
                                                                                        
                                                                                        <div class="col-md-3">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <select class="custom-select custom-select-lg mb-1 border border-primary" id="tiptra" name="tiptra">
                                                                                                            <option value=""></option>
                                                                                                        </select>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                    <label >Tipo de transaccion</label>
                                                                                                    </div>
                                                                                        </div>
                                                                                    
                                                                                    
                                                                                        <div class="col-md-3">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <select class="custom-select custom-select-lg mb-1 border border-primary" id="tippag" name="tippag">
                                                                                                            <option value=""></option>
                                                                                                        </select>
                                                                                                        <B><FONT COLOR="red">*</FONT></B>                                                                                                        
                                                                                                    <label >Tipo de pago</label>
                                                                                                    </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="text" name="numpag" id="numpag" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label>Numero de documento de pago</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-3">
                                                                                            <div class="row m-b-20">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group form-primary">
                                                                                                        <input type="number" name="valtra" id="valtra" class="form-control border border-primary">
                                                                                                        <span class="form-bar"></span>
                                                                                                        <label>Monto de la transaccion</label>
                                                                                                    </div>
                                                                                                </div>    
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>





                                                                                    <div class="row m-b-20">
                                                                                      <div class="col-md-3">
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="row m-t-30 d-flex justify-content-center">
                                                                                            <div class="col-md-12 mx-2" id="btnbuscar">
                                                                                                <button type="button"  class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="posUsuarios('<?php echo $_SESSION['codusu'] ?>')">Agregar movimiento</button>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                        </div>
                                                                                   </div>




                                                                                    <br>
                                                                                    <!-- Hover table card start -->
                                                                                    <div class="card">
                                                                                        <div class="card-header">
                                                                                            <h5>Detalle de la transaccion</h5>
                                                                                            <h5 id="Totales"></h5>

                                                                                        </div>
                                                                                        <div class="card-block table-border-style">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover" id="tablaget01">
                                                                                                    <thead>
                                                                                                        <div class="row">
                                                                                                        </div>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hover table card end -->

                                                                                    <br>






                                                                                    <div class="row m-b-20">
                                                                                      <div class="col-md-3">
                                                                                      </div>
                                                                                      <div class="col-md-6">
                                                                                          <div class="row m-t-30 d-flex justify-content-center">
                                                                                            <div class="col-md-12 mx-2" id="btnbuscar">
                                                                                                <button type="button"  class="btn btn-danger btn-md btn-block waves-effect waves-light text-center m-b-20" onclick="patTransaccion('<?php echo $_SESSION['codusu'] ?>')">Finalizar transaccion</button>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                        </div>
                                                                                   </div>




                                                                                    
                                                                                    <hr/>
                                                                                    <div id="mensaje"></div>


                                                                                    <!-- Hover table card start -->
                                                                                    <div class="card">
                                                                                        <div class="card-header">
                                                                                            <h5>Informe de cuentas bancarias</h5>
                                                                                            <span>Fecha : <code></code> </span>
                                                                                        </div>
                                                                                        <div class="card-block table-border-style">
                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover" id="tablaget34">
                                                                                                    <thead>
                                                                                                        <div class="row">
                                                                                                        </div>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Hover table card end -->

                                                                                    <br>
                                                                                    <div class="row">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!-- end of form -->
                                                                </div>
                                                                <!-- end of col-sm-12 -->
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                        <!-- end of container-fluid -->
                                                    </section>
                                                    <!-- end of section-usuarios -->
                                                    
                                                    
                                                    
<script>

        function nuevoUsuario(){
          document.getElementById("id_cuenta").value = "",
          document.getElementById("numcuenta").value = "",
          document.getElementById("tipdoc").value = "",
          document.getElementById("numdoc").value = "",
          document.getElementById("nombre").value = "",
          document.getElementById("apellido").value = "",
          document.getElementById("valape").value = "",
          document.getElementById("valsal").value = "",
          document.getElementById("tipest").value = "",
          document.getElementById("tipdoc").focus()
          document.getElementById(`btnguardar`).style.display ="inline"
          document.getElementById(`btnmodificar`).style.display = "none"
          document.querySelector('#tablaget34 tbody').innerHTML = ""
          //$('html, body').animate({scrollTop:0}, 'slow');
        
        
        
        };            
</script>


<script type="text/javascript">

        
        
        

    function getUsuarios(codusu){

      
        
        let get01data = {

          numcuenta: document.getElementById("numcuenta").value,
          numdoc: document.getElementById("numdoc").value,
      
        }
        
      
        axios({
          method:'POST',
          url: 'http://localhost:8000/api/cuentasall02',
          data: get01data
        })
          .then(function(res) {
             if(res.status==200) {
                if(res.data == 0){
                    alert ( "NO HAY COINCIDENCIAS CON LA CONSULTA REALIZADA");
                } else {
                  this.get34 = res.data;
                  llenartablaget34(codusu)
               }


		          }
 
          })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
      
      
      
      
      }


function llenartablaget34(codusu){

      document.querySelector('#tablaget34 tbody').innerHTML = ""

    for(let i = 0; i<get34.length; i++){
      document.querySelector('#tablaget34 tbody').innerHTML +=
      `<tr>
      <td>${get34[i].id}</td>
      <td>${get34[i].numdoc}</td>
      <td>${get34[i].nombre}</td>
      <td>${get34[i].apellido}</td>
      <td>${get34[i].tipest}</td>
      <td><button type="button" class="btn btn-success btn-md btn-block waves-effect waves-light text-center m-b-20"  onclick="getUsuario(${get34[i].id}, ${codusu})" style="border-radius: 20px;">Seleccionar</button></td>
      </tr>`






    }
}




function getMovimientos(){

      
        
let get01data = {

  numcuenta: document.getElementById("numcuentaact").value,
  tipest: 1,

}


axios({
  method:'POST',
  url: 'http://localhost:8000/api/movimientosall01',
  data: get01data
})
  .then(function(res) {
     if(res.status==200) {
        if(res.data == 0){
            alert ( "NO HAY COINCIDENCIAS CON LA CONSULTA REALIZADA");
        } else {
          this.get01 = res.data;
          llenartablaget01()
       }


      }

  })
  .catch(function(err) {
      alert(err);
    //console.log(err);
  })
  .then(function() {
    //loading.style.display = 'none';
  });




}


function llenartablaget01(){

  document.querySelector('#tablaget01 tbody').innerHTML = ""

  for(let i = 0; i<get01.length; i++){
  document.querySelector('#tablaget01 tbody').innerHTML +=
  `<tr>
  <td>${get01[i].tiptra}</td>
  <td>${get01[i].tippag}</td>
  <td>${get01[i].numpag}</td>
  <td>${get01[i].valtra}</td>
  <td><button type="button" class="btn btn-warning btn-md btn-block waves-effect waves-light text-center m-b-20"  onclick="delMovimiento(${get01[i].id})" style="border-radius: 20px;">Remover</button></td>
  </tr>`


  }
}


function getTotales(codusu){

//alert(codusu);      
        
let get01data = {

  numcuenta: document.getElementById("numcuentaact").value,
  codusu: codusu,

}


axios({
  method:'POST',
  url: 'http://localhost:8000/api/movimientosTot01',
  data: get01data
})
  .then(function(res) {
     if(res.status==200) {

          document.querySelector('#Totales').innerHTML = "Total : "  + formatterPeso.format(res.data);  

        if(res.data == 0){
            //alert ( "NO HAY COINCIDENCIAS CON LA CONSULTA REALIZADA");
        } else {
          //this.get01 = res.data;
          //llenartablaget01()
       }


      }

  })
  .catch(function(err) {
      alert(err);
    //console.log(err);
  })
  .then(function() {
    //loading.style.display = 'none';
  });




}



  function getallperfil(){
    //alert(tokenr)
    nombreruta = ""
//  	alert ("hola")
        axios({
          method:'GET',
          url: 'http://localhost:8000/api/perfils',
        })
          .then(function(res) {
                if(res.status==200 || res.status==201) {
                  
                  this.get01 = res.data;
                  llenarselectPerfils()
                    
                }
            })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
  
  }
  
  function llenarselectPerfils(){
 
    for(let i = 0; i<get01.length; i++){
      document.querySelector('#idgru').innerHTML +=
      `<option value="${get01[i].id}">
      ${get01[i].nombre}
        </option>`
  
    }
  }
  



  function getalltiptra(){
    //alert(tokenr)
    nombreruta = ""
//  	alert ("hola")
        axios({
          method:'GET',
          url: 'http://localhost:8000/api/tiptra',
        })
          .then(function(res) {
                if(res.status==200 || res.status==201) {
                  
                  this.get01 = res.data;
                  llenarselectTiptra()
                    
                }
            })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
  
  }
  
  function llenarselectTiptra(){
 
    for(let i = 0; i<get01.length; i++){
      document.querySelector('#tiptra').innerHTML +=
      `<option value="${get01[i].tiptra}">
      ${get01[i].nombre}
        </option>`
  
    }
  }

  function getalltippag(){
    //alert(tokenr)
    nombreruta = ""
//  	alert ("hola")
        axios({
          method:'GET',
          url: 'http://localhost:8000/api/tippag',
        })
          .then(function(res) {
                if(res.status==200 || res.status==201) {
                  
                  this.get01 = res.data;
                  llenarselectTippag()
                    
                }
            })
          .catch(function(err) {
              alert(err);
            //console.log(err);
          })
          .then(function() {
            //loading.style.display = 'none';
          });
  
  }
  
  function llenarselectTippag(){
 
    for(let i = 0; i<get01.length; i++){
      document.querySelector('#tippag').innerHTML +=
      `<option value="${get01[i].tippag}">
      ${get01[i].nombre}
        </option>`
  
    }
  }



function getUsuario(id_cuenta, codusu){
      axios({
        method:'GET',
        url: 'http://localhost:8000/api/cuentas/'+`${id_cuenta}`,
      })
        .then(function(res) {
//          alert("hola2")
              if(res.status==200 || res.status==201) {
                
                this.get01 = res.data;

        document.getElementById("numcuentaact").value = get01.id,
        document.getElementById("numdocact").value = get01.numdoc,
        document.getElementById("nomape").value = get01.nombre + " " + get01.apellido,
        document.getElementById("numcuenta").value = "",
        document.getElementById("numdoc").value = "",
        getMovimientos();
        getTotales(codusu);
                //$('html, body').animate({scrollTop:0}, 'slow');
                  
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}




function patTransaccion(codusu){

  //alert ("hola")


  let pat01data = {

          id: document.getElementById("numcuentaact").value,
          codusu: codusu,

}



      axios({
        method:'patch',
        url: 'http://localhost:8000/api/movimientos01',
        data: pat01data
      })
        .then(function(res) {
              if(res.status==200 || res.status==201) {
                this.pat01 = res.data;
                alert (res.data)
                location.reload();
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}


function posUsuarios(codusu){



  let pos01data = {

          numcue: document.getElementById("numcuentaact").value,
          tiptra: document.getElementById("tiptra").value,
          tippag: document.getElementById("tippag").value,
          numpag: document.getElementById("numpag").value,
          codusu: codusu,
          valtra: document.getElementById("valtra").value,
          tipest: "1",

}



      axios({
        method:'post',
        url: 'http://localhost:8000/api/movimientos',
        data: pos01data
      })
        .then(function(res) {
              if(res.status==200 || res.status==201) {
                getMovimientos();                
                getTotales(codusu);                
                this.pos01 = res.data;

                alert ("REGISTRO AGREGADO");
              }
          })
        .catch(function(err) {
            alert(err);
          //console.log(err);
        })
        .then(function() {
          //loading.style.display = 'none';
        });

}





function delMovimiento(id_movimiento){


id_movimiento = id_movimiento;

let del01data = {

        id: id_movimiento,

}



    axios({
      method:'delete',
      url: 'http://localhost:8000/api/movimientos01/'+`${id_movimiento}`,
      data: del01data
    })
      .then(function(res) {
            if(res.status==200 || res.status==201) {
              getMovimientos();                
              this.pat01 = res.data;
              //alert (res.data)
            }
        })
      .catch(function(err) {
          alert(err);
        //console.log(err);
      })
      .then(function() {
        //loading.style.display = 'none';
      });

}






        
    </script>


<script type="text/javascript">

    const formatterPeso = new Intl.NumberFormat('es-CO', {
       style: 'currency',
       currency: 'COP',
       minimumFractionDigits: 0
     })
     
</script>

        
