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
              <form id="frmGuardaPersonal" action="<?php echo base_url('/addPersonal') ?>" method="post">
                <input type="hidden" id="dirolcargo" value="<?php echo base_url('/llenarolcargo') ?>">
                <input type="hidden" id="dirpuesto" value="<?php echo base_url('/llenaPuesto') ?>">
                <input type="hidden" id="dirusuario" value="<?php echo base_url('/getUser') ?>">
                <input type="hidden" id="diremail" value="<?php echo base_url('/getEmail') ?>">
                <div class="row">
                  <div class="col-sm">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success align-items-center">
                      <input name="status" type="checkbox" class="custom-control-input" id="statusn" checked>
                      <label class="custom-control-label" for="statusn">Status</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Seleccione el rol general del usuario</label>
                      <select class="form-control select2bs4" style="width: 100%;" id="idrg" name="idrg" required onchange="CargarRolcargo(this.value);">
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
                    <div class="form-group" style="display:none;" id="cargo">
                      <label>Seleccione el Cargo</label>
                      <select class="form-control form-control-sm select2bs4" style="width: 100%;" id="idrc" name="idrc" required onchange="CargarDepartamento(this.value);">

                      </select>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="form-group " style="display:none;" id="departamento">
                      <label>Departamento</label>
                      <select class="form-control form-control-sm select2bs4" style="width: 100%;" id="idepto" name="idepto" required onchange="CargarPuesto(this.value);">
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
                    <div class="form-group" style="display:none;" id="puesto">
                      <label>Puesto</label>
                      <select class="form-control select2bs4" style="width: 100%;" id="idpuesto" name="idpuesto" required>
                        <option selected="selected" value="">Seleccione</option>

                      </select>
                    </div>
                  </div>
                  <hr>
                </div>
                <hr>
                <!-- unicamente para publicidad -->
                <div class="row" id="publicidad" style="display:none;">
                  <div class="col-sm-3">
                    <div class="form-group " id="ciudad">
                      <label>Ciudad</label>
                      <select class="form-control select2bs4" style="width: 100%;" id="idedo" name="idedo" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($estado)) : ?>
                          <?php foreach ($estado as $e) : ?>
                            <option value="<?= $e->idedo ?>"><?= $e->estado ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group " id="giro">
                      <label>Giro empresarial</label>
                      <select class="form-control select2bs4" style="width: 100%;" id="idgi" name="idgi" required>
                        <option selected="selected" value="">Seleccione</option>
                        <?php if (!empty($giroemp)) : ?>
                          <?php foreach ($giroemp as $g) : ?>
                            <option value="<?= $g->idgi ?>"><?= $g->descg ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Menú permitidos</label>
                      <div class="select2-purple">
                        <select class="select2" multiple="multiple" name="menu[]" data-placeholder="Select a State" data-dropdown-css-class="select2-primary" style="width: 100%;">

                          <?php if (!empty($menu)) : ?>
                            <?php foreach ($menu as $m) : ?>
                              <option value="<?= $m->idm ?>"><?= $m->descm ?></option>
                            <?php endforeach; ?>
                          <?php endif; ?>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- fin unicamente publicidad -->
                <hr>
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">usuario</label>
                      <input type="text" class="form-control form-control-sm" name="usuario" id="usuario" placeholder="de sesión">
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">Contraseña</label>
                      <input type="password" class="form-control form-control-sm" id="contra" name="contra" placeholder="para inicio de sesión" required>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">Verifique Contraseña</label>
                      <input type="password" class="form-control form-control-sm" id="contrav" name="contrav" placeholder="confirmar" required>
                    </div>
                  </div>
                </div>
                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">Apellidos</label>
                      <input type="text" class="form-control form-control-sm " id="app" name="app" placeholder="Apellido paterno -- Apellido materno" onkeyup="this.value=this.value.toUpperCase()" required>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">Nombre(s)</label>
                      <input type="text" class="form-control form-control-sm" id="nomp" name="nomp" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase()" required>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label class="col-form-label" for="campo">Email</label>
                      <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="correo electrónico" required>
                    </div>
                  </div>
                </div>
                <hr class="mt-3">
                <div class="row justify-content-center mb-3">
                  <div class="col-sm-4 ">
                  <input type="hidden" class="form-control form-control-sm" id="edita" value="<?= session('idp'); ?>" readonly name="edita">
                    <button type="submit" id="btnGuardaus" class="btn btn-primary btn-block">Guardar Usuario</button>
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
<?= $this->endsection() ?>