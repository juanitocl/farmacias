<?php include('parts/head.php') ?>

<?php include('parts/content-one.php') ?>

<!-- Container-->
<div class="container-fluid">

  <!-- row -->
  <div class="row">

    <!-- col-lg-3-->
    <div class="col-lg-3">
      <div class="card mb-4">
        <div class="card-header text-primary">
          Farmacias de Turno
        </div>
        <div class="card-body">
          <form name="formBuscador" class="user">

            <div class="form-group">
              <select id="comuna" class="form-control" required="required"></select>
            </div>

            <div class="form-group">
              <select id="locales" class="form-control" required="required">
                <option value="">Elija local</option>
              </select>
            </div>

            <button id="btnBuscar" class="btn btn-primary btn-block">Buscar</button>
            <hr>
            <button id="btnReceta" class="btn btn-secondary btn-block">Obtener receta médica</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /col-lg-3-->

    <!-- col-lg-9-->
    <div class="col-lg-9">
      <?php include('utils/resultados.php'); ?>
      <?php if(isset($_GET['com_id']) AND !empty($_GET['com_id']) AND is_numeric($_GET['com_id']) AND isset($resul) AND $resul > 0) :?>

      <h1 class="h3 mb-4 text-gray-800">
        <?php

        echo "<p class='mb-4'>COMUNA: $nombreComuna</p>";
        ?>
      </h1>
      <p>REGIÓN: METROPOLITANA</p>

      <div class="row">
        <?php

        foreach ($info_locales as $locales) {
          echo '<div class="col-xl-3 col-md-6 mb-4">
          <div class="shadow h-100 py-2">
          <div class="card-body">
          <div class="row no-gutters align-items-center">
          <div class="col mr-2">
          <div class="h5 mb-0 font-weight-bold text-gray-800">'.$locales['local'].'</div>
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">'.$locales['direccion'].'</div>
          <br>
          <a href="local.php?com_id='.$locales['id_com'].'&lcl='.$locales['local_id'].'" class="btn btn-primary">Visitar</a>
          </div>
          </div>
          </div>
          </div>
          </div>';
        }

        ?>
      </div>
      <?php else: ?>
        <div class="rowi justify-content-center">
          <h1 class="h3 mb-4 text-gray-800">¡Resultados no encontrados!</h1>
        </div>
      <?php endif; ?>
    </div>
    <!-- /col-lg-9-->
  </div>
  <!-- /row-->

</div>
<!-- /container-->
<?php include('parts/content-two.php') ?>
