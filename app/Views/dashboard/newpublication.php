<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Nueva Publicación</h1>
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
      <h3 class="card-title"> <b><?php echo session('usuario'); ?></b></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <!-- inicio de formulario -->
      <form action="" method="post">
        <div class="row">
          <div class="col-sm-9">
            <div class="form-group">
              <label>Título</label>
              <input type="text" class="form-control form-control-sm" name="titulo" placeholder="Aparecerá como titulo general de la publicación" required>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success ">
              <input type="checkbox" class="custom-control-input align-bottom" id="customSwitch3" name="main">
              <label class="custom-control-label" for="customSwitch3">Aparece en la página principal</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Subtítulo</label>
              <input type="text" class="form-control form-control-sm" name="subtitulo" placeholder="Sutítulo de la publicación" required>
            </div>
          </div>
        </div>
        <hr>
        <h4>Indique la categoría de la publicación</h4>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Menú</label>
              <select class="form-control form-control-sm select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="menu">
                <option selected="selected" value="0">Seleccione</option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m->idm ?>"><?= $m->descm ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <?php if (!empty($submenu)) : ?>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Submenú</label>
                <select class="form-control form-control-sm select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="submenu">
                  <option selected="selected" value="0">Seleccione</option>
                  <?php foreach ($submenu as $sm) : ?>
                    <option value="<?= $sm->ids ?>"><?= $sm->descs ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          <?php endif; ?>
          <?php if (!empty($basemenu)) : ?>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Base</label>
                <select class="form-control form-control-sm select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="basemenu">
                  <option selected="selected" value="0">Seleccione</option>
                  <?php foreach ($basemenu as $bm) : ?>
                    <option value="<?= $bm->idb ?>"><?= $bm->descb ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <hr>
        <h4>Gráfico principal</h4>
        <div class="row">
          <div class="col-sm">

            <div class="form-group">
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" required>
                <label for="customRadio1" class="custom-control-label">Imágen principal</label>
              </div>
              <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio"  required>
                <label for="customRadio2" class="custom-control-label">Slider</label>
              </div>
            </div>

          </div>
        </div>
        <hr>
        <h4>Ingrese el texto descriptivo</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Descripción
                  <small>de publicación</small>
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Ingrese la descripción de la publicación" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="descripcion"></textarea>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
        <!-- ./row -->

      </form>
      <!-- fin de formulario -->
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