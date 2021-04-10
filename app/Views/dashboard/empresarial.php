<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Giro Empresarial registrado </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url('/dashboard') ?>">Inicio</a></li>

          <li class="breadcrumb-item active">Giro <?= $uri->getSegment(1) ?></li>
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
      <div class="row justify-content-start mb-3">
        <div class="col-2 ">
          <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addGiroemp">Giro empresarial <i class="fas fa-plus-circle"></i></a>
        </div>
      </div>
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
              <div class="row">
                <div class="col">
                  <!-- inicio de despliegue de datatable -->

                  <?php if (empty($giros)) : ?>
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
                          <th>Ultima actualización</th>
                          <th>Modificó</th>
                          <th></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($giros as $de) : ?>
                          <tr>
                            <td><?= $de->idgi ?>
                            <input class="form-control form-control-sm idgi" type="hidden" size="3" maxlength="2" name="tr1" style="width: 50px; text-align: right;" value="<?= $de->idgi?>">
                            <input class="form-control form-control-sm base_urlb" type="hidden" name="base_urlb" value="<?php echo base_url('/delGiroemp') ?>">
                            </td>
                            <td>
                              <?= $de->descg ?>
                            </td>
                            <td align="center">
                              <?php if ($de->status == 1) {
                                echo "<i class='far fa-check-circle' style='color: green;'></i> ";
                              } else {
                                echo "<i class='far   fa-times-circle' style='color: red;'></i>";
                              } ?></td>
                           
                            <td><?= $de->created_at ?></td>
                            <td><?= $de->updated_at ?></td>
                            <td><?= $de->app . " " . $de->nomp ?></td>
                            <?php
                            $datos = $de->idgi . "||" .
                              $de->descg . "||" .
                              $de->status;
                            ?>
                            <td align="center">
                              <div class="btn-group">
                              <button class="btn btn-success btn-xs" title="modificar" data-toggle="modal" data-target="#updateGiro" onclick="agregaformGiro('<?php echo $datos ?>')">
                                <i class="fas fa-pencil-alt"></i>
                              </button> 
                              <button class="btn btn-warning btn-xs btn-borraGiro" title="borrar" >
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
                          <th>Ultima actualización</th>
                          <th>Modificó</th>
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
<div class="modal fade" id="addGiroemp">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Agregue nuevo Giro empresarial</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmaddEmpre" action="<?php echo base_url('/addEmpre') ?>" method="post">
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
                <input type="text" class="form-control form-control-sm"  value="" name="descg" required>

                <input type="hidden" class="form-control form-control-sm"  value="<?= session('idp'); ?>" readonly name="edita">
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
<div class="modal fade" id="updateGiro">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Giro empresarial</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmupdateGiroemp" action="<?php echo base_url('/updateGiroemp') ?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm">
              <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                <input name="status" type="checkbox" class="custom-control-input" id="statusu" >
                <label class="custom-control-label" for="statusu">Status</label>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-sm">
              <div class="form-group">
                <label for="descm">Nombre de departamento</label>
                <input type="text" class="form-control form-control-sm" id="descg" value="" name="descg" required>
                <input type="hidden" class="form-control form-control-sm" id="idgi" value="" name="idgi" required>

                <input type="hidden" class="form-control form-control-sm" id="edita" value="<?= session('idp'); ?>" readonly name="edita">
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