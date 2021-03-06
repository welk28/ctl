<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-7">
      <h4 >Menú principal <b><?= $menu->descm ?></b> / Submenú <b><?= $submenu->descs ?></b></h4>
      </div><!-- /.col -->
      <div class="col-sm-5">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard') ?>">Inicio</a></li>
          <li class="breadcrumb-item"><a href="<?php echo base_url('/menu') ?>">Menú</a></li>
          <li class="breadcrumb-item active">Op. de <?= $uri->getSegment(1) ?></li>
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
      <h3 class="card-title">Bienvenido <b><?php echo session('usuario'); ?></b></h3>
      <div class="col-1 text-right">
        <form class="frmborrasubmenu" action="<?php echo base_url('/delSubmenu'); ?>" method="post">
          <button type="submit" class="btn btn-warning btn-xs" title="Borra registro">
            <i class="far fa-trash-alt"></i> Eliminar</button>
          <input type="hidden" value="<?php echo $ids; ?>" name="ids">
        </form>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Registro </h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>

                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body pb-5">
              <form id="frmupdatesSubmenu" action="<?php echo base_url('/updatesSubmenu') ?>" method="post">
                <div class="row justify-content-between pb-3">
                  <div class="col-sm-2 ">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                      <?php if ($submenu->status == 1) : ?>
                        <input name="status" type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                      <?php else : ?>
                        <input name="status" type="checkbox" class="custom-control-input" id="customSwitch3">
                      <?php endif; ?>
                      <label class="custom-control-label" for="customSwitch3">Status</label>
                    </div>
                  </div>


                </div>


                <div class="row justify-content-center">
                  <div class="col-sm-1">
                    <div class="form-group">
                      <label for="ids">id</label>
                      <input type="text" class="form-control form-control-sm" id="ids" value="<?= $ids ?>" readonly name="ids">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="descs">Descripción</label>
                      <input type="text" class="form-control form-control-sm" id="descs" value="<?= $submenu->descs ?>" name="descs" required>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="created_at">Creado</label>
                      <input type="text" class="form-control form-control-sm" id="created_at" value="<?= $submenu->created_at ?>" name="created_at" readonly>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="updated_at">Modificado</label>
                      <input type="text" class="form-control form-control-sm" id="updated_at" value="<?= $submenu->updated_at ?>" name="updated_at" readonly>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="modifica">Editado por</label>

                      <input type="hidden" class="form-control" id="edita" value="<?= session('idp'); ?>" name="edita" readonly>
                      <input type="text" class="form-control form-control-sm" id="modifica" value="<?= $submenu->app . " " . $submenu->nomp ?>" name="modifica" readonly>
                      <input type="hidden" class="form-control" id="nombre" value="<?= session('nombre'); ?>" name="nombre" readonly>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center mt-3">
                  <div class="col-sm-5 ">
                    <button type="submit" class="btn btn-primary btn-block">Guardar cambios</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->

          </div>
          <!--/.direct-chat -->
        </div>
      </div>
      <hr>
      <!-- boton para crear nuevo submenu -->
      <div class="row justify-content-start mb-3">
        <div class="col-2 ">
          <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#newBasemenu">Basemenú <i class="fas fa-plus-circle"></i></a>
        </div>
      </div>
      <!-- fin de boton para crear submenu -->

      <!-- comienza listado de submenu -->
      <div class="row">
        <div class="col-md-12">
          <!-- DIRECT CHAT PRIMARY -->
          <div class="card card-primary card-outline direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Basemenú</h3>

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

                  <?php if (empty($basemenu)) : ?>
                    <div class="alert alert-warning alert-dismissible">
                      <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                      No hay datos para mostrar
                    </div>
                  <?php else : ?>

                    <table id="listax" class="table table-striped table-bordered table-sm" style="width:100%">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Descripcion</th>

                          
                          <th>Status</th>
                          <th>Fecha creación</th>
                          <th>Última Modificación</th>
                          <th></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($basemenu as $bm) : ?>
                          <tr>
                            <td><?= $bm->idb ?> 
                            <input class="form-control form-control-sm idb" type="hidden" size="3" maxlength="2" name="tr1" style="width: 50px; text-align: right;" value="<?= $bm->idb?>">
                            <input class="form-control form-control-sm base_urlb" type="hidden" name="base_urlb" value="<?php echo base_url('/delBasemenu') ?>">
                            </td>
                            <td>
                              <?= $bm->descb ?>
                            </td>

                            
                            <td align="center"><?php if ($bm->status == 1) {
                                                  echo "<i class='far fa-check-circle' style='color: green;'></i> ";
                                                } else {
                                                  echo "<i class='far   fa-times-circle' style='color: red;'></i>";
                                                } ?></td>
                            <td><?= $bm->created_at ?></td>
                            <td><?= $bm->updated_at ?></td>
                            <?php 
                              $datos=$bm->idb."||".
                              $bm->descb."||".
                              $bm->status;
                            ?>
                            <td align="center">
                              <div class="btn-group">
                                
                              <button class="btn btn-success btn-xs" title="modificar" data-toggle="modal" data-target="#modBasemenu" onclick="agregaform('<?php echo $datos ?>')">
                                <i class="fas fa-pencil-alt"></i>
                              </button> 
                              <button class="btn btn-warning btn-xs btn-borrabm" title="borrar" >
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
                          <th>Descripcion</th>
                          <th>Status</th>
                          <th>Fecha creación</th>
                          <th>Última Modificación</th>
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
<div class="modal fade" id="modBasemenu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificación Basemenú</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmupdateBasemenu" action="<?php echo base_url('/updateBasemenu') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                <input name="status" type="checkbox" class="custom-control-input" id="statusup" >
                <label class="custom-control-label" for="statusup">Status</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm">
              <div class="form-group">
                <label for="descm">Descripción</label>
                <input type="text" class="form-control form-control-sm" id="descbu" value="" name="descb" required>
                <input type="hidden" class="form-control form-control-sm" id="idbu" value="" readonly name="idb">
                <input type="hidden" class="form-control form-control-sm" id="editau" value="<?= session('idp'); ?>" readonly name="edita">
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


<div class="modal fade" id="newBasemenu">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregar Basemenú</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmnewBasemenu" action="<?php echo base_url('/newBasemenu') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                <input name="status" type="checkbox" class="custom-control-input" checked >
                <label class="custom-control-label" for="statusup">Status</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm">
              <div class="form-group">
                <label for="descm">Descripción</label>
                <input type="text" class="form-control form-control-sm" id="descbu" value="" name="descb" required>
                <input type="hidden" class="form-control form-control-sm" id="ids" name="ids" value="<?= $ids ?>" required>
                <input type="hidden" class="form-control form-control-sm" id="editau" value="<?= session('idp'); ?>" readonly name="edita">
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