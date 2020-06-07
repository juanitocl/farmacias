<?php include('parts/head.php') ?>

<?php include('parts/content-one.php') ?>

<!-- Container-->
<div class="container-fluid">

  <!-- h1 titulo - nombre del local-->
  <h1 class="h3 mb-4 text-gray-800">
    <?php
    include('utils/info_locales.php');
    echo $nombre_local;
    ?>
  </h1>
  <!-- /h1 titulo - nombre del local-->

  <?php echo '<p class="mb-4"><a href="resultados.php?com_id='.$com_id.'">Listado de locales</a></p>'?>

  <!-- div row-->
  <div class="row">

    <!-- div col-lg-4-->
    <div class="col-lg-4">
      <?php
      echo '<div class="card mb-4 shadow">
      <div class="card-header text-primary">
      Información del Local
      </div>
      <div class="card-body">';
      echo '<ul class="list list-unstyled">';
      foreach ($info_locales as $valores) {
        echo '<li>Dirección: '.$valores['direccion'].'</li>';
        echo '<li>Teléfono: '.$valores['tel'].'</li>';
        echo '<li>latitutd: '.$valores['latitutd'].'</li>';
        echo '<li>longitud: '.$valores['longitud'].'</li>';
      }
      echo '</ul>';
      echo '</div>
      </div>';
      ?>
    </div>
    <!-- /div col-lg-4-->

    <!-- div col-lg-8-->
    <div class="col-lg-8">

      <!-- div row-->
      <div class="row">

        <!-- div col-lg-4-->
        <div class="col-lg-4">
          <div class="card mb-4 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">EUCERIN</h5>
              <p class="card-text">Bálsamo Calmante Atopic</p>
              <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <!-- /div col-lg-4-->

        <!-- div col-lg-4-->
        <div class="col-lg-4">
          <div class="card mb-4 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">DHS</h5>
              <p class="card-text">Shampoo DHS Clear</p>
              <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <!-- /div col-lg-4-->

        <!-- div col-lg-4-->
        <div class="col-lg-4">
          <div class="card mb-4 shadow" style="width: 18rem;">
            <img class="card-img-top" src="images/3.png">
            <div class="card-body">
              <h5 class="card-title">VICHY</h5>
              <p class="card-text">Normaderm, exfoliante...</p>
              <a href="#" class="btn btn-primary">Agregar</a>
            </div>
          </div>
        </div>
        <!-- /div col-lg-4-->

      </div>
      <!-- /div row-->

    </div>
    <!-- /div col-lg-8-->

  </div>
  <!-- /div row-->

</div>
<!--/ container-->

<?php include('parts/content-two.php') ?>
