<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Alta de personal </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard') ?>">Inicio</a></li>

          <li class="breadcrumb-item active"> <?= $uri->getSegment(1) ?></li>
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

    </div>
    <div class="card-body">

      <!-- boton para crear nuevo -->
      <!-- <div class="row justify-content-start mb-3">
        <div class="col-2 ">
          <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addRolgral">Rol General <i class="fas fa-plus-circle"></i></a>
        </div>
      </div> -->
      <!-- fin de boton para crear  -->

      <!-- comienza listado de  -->
      <div class="row">
        <div class="col-md-12">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Lista</h3>

              <div class="card-tools">

                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>

                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- inicio de despliegue de formuario de alta -->
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Seleccione el rol general del usuario</label>
                      <select class="form-control select2bs4" style="width: 100%;" name="idrg" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($rolgral)) : ?>
                          <?php foreach ($rolgral as $rg) : ?>
                            <option value="<?= $rg->idrg ?>"><?= $rg->descrg ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Seleccione el Cargo</label>
                      <select class="form-control select2bs4" style="width: 100%;" name="idrg" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($rolcargo)) : ?>
                          <?php foreach ($rolcargo as $rc) : ?>
                            <option value="<?= $rc->idrc ?>"><?= $rc->descc ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Departamento</label>
                      <select class="form-control select2bs4" style="width: 100%;" name="idepto" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($departamentos)) : ?>
                          <?php foreach ($departamentos as $d) : ?>
                            <option value="<?= $d->idepto ?>"><?= $d->nomdepto ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Puesto</label>
                      <select class="form-control select2bs4" style="width: 100%;" name="idpuesto" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($puestos)) : ?>
                          <?php foreach ($puestos as $p) : ?>
                            <option value="<?= $p->idpuesto ?>"><?= $p->descpuesto ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>

                  </div>
              </form>
              <!-- fin de despliegue de formuario de alta -->
            </div>
            <!-- /.card-body -->

          </div>
          <!--/.direct-chat -->
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <p>Dudas, contactar al administrador</p>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->


  
</section>
<!-- /.content -->
<div class="modal fade" id="addRolgral">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregue nuevo Rol General</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmaddRolgral" action="<?php echo base_url('/addRolgral') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                <input name="status" type="checkbox" class="custom-control-input" id="statusn" checked>
                <label class="custom-control-label" for="statusn">Status</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm">
              <div class="form-group">
                <label for="descm">Nombre del Rol General</label>
                <input type="text" class="form-control form-control-sm" id="descrg" value="" name="descrg" required>

                <input type="hidden" class="form-control form-control-sm" id="modifica" value="<?= session('idp'); ?>" readonly name="modifica">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-primary btn-block">Agregar</button>
          <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal para modificacion -->
<div class="modal fade" id="updateRolgral">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Departamento</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmupdateRolgral" action="<?php echo base_url('/updateRolgral') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                <input name="status" type="checkbox" class="custom-control-input" id="statusu" checked>
                <label class="custom-control-label" for="statusn">Status</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm">
              <div class="form-group">
                <label for="descm">Nombre de departamento</label>
                <input type="text" class="form-control form-control-sm" id="descrg" value="" name="descrg" required>
                <input type="text" class="form-control form-control-sm" id="idrg" value="" name="idrg" required>

                <input type="text" class="form-control form-control-sm" id="modifica" value="<?= session('idp'); ?>" readonly name="modifica">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-primary btn-block">Guardar</button>
          <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= $this->endsection() ?>