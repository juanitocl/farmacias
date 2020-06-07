
<?php include('parts/head.php') ?>

<?php include('parts/content-one.php') ?>

<!-- Container fluid-->
<div class="container-fluid">

  <!-- row-->
  <div class="row justify-content-center">

    <!-- col-xl-4 col-lg-6 col-md-5-->
    <div class="col-xl-4 col-lg-6 col-md-5">
      <!-- card-->
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Farmacias de turno</h1>
              <p class="my-3">Región Metropolitana</p>
            </div>
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
      <!-- /card-->
    </div>
    <!-- /col-xl-4 col-lg-6 col-md-5-->

  </div>
  <!-- /row-->

</div>
<!-- /container fluid-->
<?php include('parts/content-two.php') ?>
