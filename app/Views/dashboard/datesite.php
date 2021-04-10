<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Datos del sitio</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard') ?>">Inicio</a></li>
          <li class="breadcrumb-item active"><?= $uri->getSegment(1) ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <!-- <div class="container-fluid"> -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Configuración</b></h3>


    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Icono </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pb-3 ">
              <form id="frmcargaIcono" action="<?php echo base_url('/saveIcono') ?>" method="post" enctype="multipart/form-data">
                <div class="row justify-content-md-center mt-3 align-items-center">
                  <div class="col-sm-2">
                    <img src="<?php echo base_url() ?>/public/uploads/<?= $datos->icono ?>" alt="Icono actual" width="90">
                  </div>
                  <div class="col-sm-5">
                    <div class="form-group">
                      <label>Icono de sitio</label>
                      <input type="file" class="form-control-file" name="icono" required>
                      <input type="hidden" class="form-control form-control-sm" id="id" value="<?= $datos->id ?>" readonly name="id">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->

          </div>
          <!--/.direct-chat -->
        </div>
      </div>
      <form id="frmDatesiteupdate" action="<?php echo base_url('/saveDatesite') ?>" method="post">

        <div class="row">
          <div class="col-sm">
            <div class="form-group">
              <label>Titulo principal de la página</label><br>
              <small>Aparece en la pestaña del navegador</small>
              <input type="text" class="form-control" value="<?= $datos->titulo ?>" placeholder="Introduzca el título" name="titulo" required>
              <input type="hidden" class="form-control form-control-sm" id="edita" value="<?= session('idp'); ?>" readonly name="edita">
              <input type="hidden" class="form-control form-control-sm" id="id" value="<?= $datos->id ?>" readonly name="id">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" value="<?= $datos->mail ?>" placeholder="Email" name="mail">
            </div>
          </div>
          <div class="col-sm">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
              </div>
              <input type="text" class="form-control" value="<?= $datos->fb ?>" placeholder="facebook" name="fb">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fab fa-twitter-square"></i></span>
              </div>
              <input type="text" class="form-control" value="<?= $datos->tw ?>" placeholder="twitter" name="tw">
            </div>
          </div>
          <div class="col-sm">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
              </div>
              <input type="text" class="form-control solo-numero" value="<?= $datos->telof ?>" placeholder="Teléfono oficina" maxlength="10" name="telof">
            </div>
          </div>
          <div class="col-sm">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
              </div>
              <input type="text" class="form-control solo-numero" value="<?= $datos->telc ?>" placeholder="Teléfono Celular" maxlength="10" name="telc">
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-sm-4">
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
          </div>
        </div>

      </form>





    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <p>Dudas, contactar al administrador</p>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->


  </div> -->
  <!--/. container-fluid -->
</section>
<!-- /.content -->



<?= $this->endsection() ?>