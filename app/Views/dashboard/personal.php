<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Personal registrado en <b><?= $rol->descrg ?></b> </h1>
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
              <div class="row">
                <div class="col">
                  <!-- inicio de despliegue de datatable -->

                  <?php if (empty($personal)) : ?>
                    <div class="alert alert-warning alert-dismissible">
                      <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                      No hay datos para mostrar
                    </div>
                  <?php else : ?>

                    <table id="listax" class="table table-striped table-bordered table-sm" style="width:100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Usuario</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Cargo</th>
                          <th>Departamento</th>
                          <th>Puesto</th>
                          <?php if (($rol->idrg != 1) && ($rol->idrg != 2)) : ?>
                            <th>Giro empr</th>
                            <th>Estado</th>
                          <?php endif; ?>
                          <th>status</th>
                          <?php if ($rol->idrg == 4) : ?>
                            <th>Publica en</th>
                          <?php endif; ?>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($personal as $p) : ?>
                          <tr>
                            <td><?= $p->idp ?></td>
                            <td><?= $p->usuario ?></td>
                            <td><?= $p->app . " " . $p->nomp ?></td>
                            <td><?= $p->email ?></td>

                            <td><?= $p->descc ?></td>
                            <td><?= $p->nomdepto ?></td>
                            <td><?= $p->descpuesto ?></td>
                            <?php if ($rol->idrg != 1 && $rol->idrg != 2) : ?>
                              <td><?php if(!empty($p->descg)){ echo $p->descg;} ?></td>
                              <td><?php if(!empty($p->estado)){echo $p->estado;} ?></td>
                            <?php endif; ?>

                            <td align="center">
                              <?php if ($p->status == 1) {
                                echo "<i class='far fa-check-circle' style='color: green;'></i> ";
                              } else {
                                echo "<i class='far   fa-times-circle' style='color: red;'></i>";
                              } ?></td>
                            <?php if ($rol->idrg == 4) : ?>
                              <td>
                                <?php
                                $db = \Config\Database::connect();
                                $sub = $db->query("SELECT p.idp, p.idm, m.descm FROM pubasigna p, menu m WHERE p.idm=m.idm AND p.status=1 AND p.idp=$p->idp");
                                $pubasigna = $sub->getResult();
                                ?>
                                <?php foreach($pubasigna as $pu):?>
                                  <?= $pu->descm."<br>" ?>
                                <?php endforeach;?>
                              </td>
                            <?php endif; ?>
                            <td align="center">
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>/role/<?= $p->idp ?>" class="btn btn-success btn-xs" title="Ver los datos generales del rol"><i class="fas fa-th-list"></i></a>
                                <button class="btn btn-warning btn-xs btn-borrabm" title="borrar">
                                  <i class="far fa-trash-alt"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>id</th>
                          <th>Usuario</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Cargo</th>
                          <th>Departamento</th>
                          <th>Puesto</th>
                          <?php if ($rol->idrg != 1 && $rol->idrg != 2 ) : ?>
                            <th>Giro empr</th>
                            <th>Estado</th>
                          <?php endif; ?>

                          <th>status</th>
                          <?php if ($rol->idrg == 4) : ?>
                            <th>Publica en</th>
                          <?php endif; ?>
                          <th></th>
                        </tr>
                      </tfoot>
                    </table>
                  <?php endif; ?>
                  <!-- fin de despliegue de datatabla -->
                </div>
              </div>
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


  </div> -->
  <!--/. container-fluid -->
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