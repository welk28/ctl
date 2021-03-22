<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Opciones de menú principal</h1>
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
      <!-- inicio de despliegue de datatable -->
      
      <?php if(empty($menu)):?>
      <div class="alert alert-warning alert-dismissible">
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
        No hay datos para mostrar
      </div>
      <?php else: ?>
        
      <table id="listax" class="table table-striped table-bordered table-sm" style="width:100%">
        <thead>
          <tr>
            <th>id</th>
            <th>Descripcion</th>
            <th>Status</th>
            <th>Editado por</th>
            <th>Opciones</th>
            
          </tr>
        </thead>
        <tbody>
        <?php foreach($menu as $m):?>
          <tr>
            <td><?= $m->idm ?></td>
            <td><?= $m->descm ?></td>
            <td><?php if($m->status==1){echo "<i class='far fa-check-circle' style='color: green;'></i> ";}else{echo "<i class='far fa-times-circle' style='color: red;'></i>";} ?></td>
            <td><?= $m->app." ".$m->nomp ?></td>
            <td align="center">
            <a href="#" class="btn btn-success btn-xs" title="Ver los datos generales del menú"><i class="fas fa-th-list"></i></a>
            <a href="#" class="btn btn-primary btn-xs" title="Modificar datos del menú"><i class="fas fa-pencil-alt"></i></a>
            <a href="#" class="btn btn-warning btn-xs" title="Borrar el menú"><i class="far fa-trash-alt"></i></a>

            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
        <tfoot>
          <tr>
          <th>id</th>
            <th>Descripcion</th>
            <th>Status</th>
            <th>Editado por</th>
            <th>Opciones</th>
          </tr>
        </tfoot>
      </table>
      <?php endif;?>
      <!-- fin de despliegue de datatabla -->
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