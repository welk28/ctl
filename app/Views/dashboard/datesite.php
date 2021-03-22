<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>
<?php
$configModel = new \App\Models\Configurate_model($id);

$fb = $configModel->getConfigfb(1);
$tw = $configModel->getConfigfb(2);
$tel = $configModel->getConfigfb(3);
$mail = $configModel->getConfigfb(4);
$cel = $configModel->getConfigfb(5);
$ig = $configModel->getConfigfb(6);
$title = $configModel->getConfigfb(7);

?>
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

      <!-- <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div> -->
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label >Titulo principal de la página</label><br>
          <small>Aparece en la pestaña del navegador</small>
          <input type="text" class="form-control" value="<?= $title->ruta ?>" placeholder="Introduzca el título">
        </div>
       
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" value="<?= $mail->ruta ?>" placeholder="Email" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
          </div>
          <input type="text" class="form-control" value="<?= $fb->ruta ?>" placeholder="facebook" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fab fa-twitter-square"></i></span>
          </div>
          <input type="text" class="form-control" value="<?= $tw->ruta ?>" placeholder="twitter" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
          </div>
          <input type="text" class="form-control" value="<?= $tel->ruta ?>" placeholder="Teléfono oficina" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
          </div>
          <input type="text" class="form-control" value="<?= $cel->ruta ?>" placeholder="Teléfono Celular" required>
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