<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Bienvenido a CTL</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard')?>">Inicio</a></li>
          <li class="breadcrumb-item active"><?= $uri->getSegment(1) ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <!-- <div class="container-fluid">
<!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Bienvenido <b><?php echo session('usuario'); ?></b></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <p>Hola <?php echo session('nombre'); ?>, ha sido identificado(a) tu acceso a CTL como <b> <?= session('idrc'); ?> </b></p>
      <p>En el panel de tu izquierda verás las opciones a las que tienes acceso</p>
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