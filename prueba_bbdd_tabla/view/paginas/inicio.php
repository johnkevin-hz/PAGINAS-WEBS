<?php 

  //$usuarios = ControllerFormularios::ctrSelecRegistryTrab();
  $cache_rann = rand(22,99999);

?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PRUEBA</title>
    <style>
      .btn{
        border-radius: 2rem;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="col-md-12 py-5 px-3 mx-auto">
        <h1 class="text-center">PRUEBA N°1 - TABLA DE TRABAJADORES</h1>
        <table class="table table-striped table-hover">
          <caption><button type="button" class="btn btn-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">+ AGREGAR NUEVO TRABAJADOR</button></caption>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Código</th>
              <th scope="col">Nombres y Apellidos del Trabajador</th>
              <th scope="col">Estado Trabajador</th>
              <th scope="col">Fecha y Hora</th>
              <th scope="col">Modificar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($usuarios as $key => $value): ?>
              <tr>
                <th scope="row"><?php echo  $value["tra_ide"];?></th>
                <th scope="row" class="text-truncate" style="max-width: 18px;"><?php echo  $value["tra_cod"];?></th>
                <td><?php echo  $value["tra_nom"];?>, <?php echo  $value["tra_pat"];?> <?php echo  $value["tra_mat"];?></td>
                <td><?php echo  $value["est_ado"]; if($value["est_ado"] == 0){echo " <span class='badge bg-info text-dark'>ACTIVO</span>";}else{echo " <span class='badge bg-danger text-dark'>ELIMINADO</span>";}?></td>
                <td><?php echo  $value["tra_Ful"];?> - <?php echo  $value["tra_Hul"];?></td>
                <td><button type="button" class="btn btn-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo  $value["tra_cod"];?>">EDITAR</button></td>
                <td><button type="button" class="btn btn-info btn-block" data-bs-toggle="modal" data-bs-target="#exampleModaleli<?php echo  $value["tra_cod"];?>">ELIMINAR TRABAJADOR</button></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
        <?php
          include('modals.php');
        ?>


      

      </div>

      <!-- AGREGAR TRAB -->
      <div class="col-md-12">
        <?php 
          $Registry = ControllerFormularios::ctrRegistry();
          if($Registry == "error"){
              echo "
              <div id='aler' class='alert alert-dismissible alert-dark' style='background: #d9534f;color: #fff;border-color: #fff;'><span class='icon-cross'></span><i class='fa fa-fw fa-close'></i>ERROR¡¡</div>
              <script>
              setTimeout(function(){
                  if(window.history.replaceState){
                  window.history.replaceState(null, null, window.location.href);
                  }
                  window.location.reload(); 
              });
              </script>
              ";
          }

          if($Registry == "ok"){
          echo "
          <div id='aler' class='alert alert-dismissible alert-success'><span class='icon-cross'></span><i class='fa fa-fw fa-check'></i>¡¡TRABAJADOR AGREGADO CORRECTAMENTE!!</div>
          <script>
          setTimeout(function(){
              window.location ='index.php?pagina=inicio';
          });
          </script>";
          }

              
        ?>
        
      </div>

      <!-- EDITAR TRAB -->
      <div class="col-md-12">
        <?php 
          $Edit = ControllerFormularios::ctrEdit();
          if($Edit == "error"){
              echo "
              <div id='aler' class='alert alert-dismissible alert-dark' style='background: #d9534f;color: #fff;border-color: #fff;'><span class='icon-cross'></span><i class='fa fa-fw fa-close'></i>ERROR¡¡</div>
              <script>
              setTimeout(function(){
                  if(window.history.replaceState){
                  window.history.replaceState(null, null, window.location.href);
                  }
                  window.location.reload(); 
              });
              </script>
              ";
          }

          if($Edit == "ok"){
          echo "
          <div id='aler' class='alert alert-dismissible alert-success'><span class='icon-cross'></span><i class='fa fa-fw fa-check'></i>¡¡TRABAJADOR AGREGADO CORRECTAMENTE!!</div>
          <script>
          setTimeout(function(){
              window.location ='index.php?pagina=inicio';
          });
          </script>";
          }

              
        ?>
      </div>

      <!-- ELIMINAR TRAB -->
      <div class="col-md-12">
        <?php 
          $Eli = ControllerFormularios::ctrEli();
          if($Eli == "error"){
              echo "
              <div id='aler' class='alert alert-dismissible alert-dark' style='background: #d9534f;color: #fff;border-color: #fff;'><span class='icon-cross'></span><i class='fa fa-fw fa-close'></i>ERROR¡¡</div>
              <script>
              setTimeout(function(){
                  if(window.history.replaceState){
                  window.history.replaceState(null, null, window.location.href);
                  }
                  window.location.reload(); 
              });
              </script>
              ";
          }

          if($Eli == "ok"){
          echo "
          <div id='aler' class='alert alert-dismissible alert-success'><span class='icon-cross'></span><i class='fa fa-fw fa-check'></i>¡¡TRABAJADOR AGREGADO CORRECTAMENTE!!</div>
          <script>
          setTimeout(function(){
              window.location ='index.php?pagina=inicio';
          });
          </script>";
          }

              
        ?>
      </div>

      <p class="text-muted">Copyright@ kevving.com 2022. Todos los derechos reservados.</p>
    
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>






<script>
 //window.location="politica-de-privacidad.pdf";
</script>