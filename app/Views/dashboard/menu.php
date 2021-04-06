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
  <!-- <div class="container-fluid"> -->
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
      <?php
      //selecciona todos los menú activos del sitio
      $db = \Config\Database::connect();
      $consulta = $db->query("SELECT * FROM menu WHERE STATUS=1");
      $lista = $consulta->getResult();
      //print_r($resultado);
      ?>
      <?php if (empty($lista)) : ?>
        <div class="alert alert-danger" role="alert">
          No hay opciones de menú
        </div>
      <?php else : ?>
        <div class="row">
          <div class="col">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Vista previa de opciones de menú</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <?php foreach ($lista as $m) : ?>
                        <?php
                        //de los menús obtenidos, verificar si tiene submenu, dependiendo de ello, mostrar un submenú o liga simple
                        $consulta = $db->query("select * from submenu where status=1 and idm=$m->idm");
                        $cm = $consulta->getNumRows();
                        $submenu = $consulta->getResult();
                        ?>
                        <?php if ($cm == 0) : ?>
                          <li class="nav-item"><a class="nav-link" href="#"><?= $m->descm ?></a></li>
                        <?php elseif ($cm > 0) : ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= $m->descm ?> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <?php foreach ($submenu as $s) : ?>
                                <?php //verificar si el submenú tiene más opciones para generar su baseMenu, si no, solo colocar simple
                                $consulta = $db->query("select * from basemenu where status=1 and ids=$s->ids");
                                $cs = $consulta->getNumRows();
                                $basemenu = $consulta->getResult();
                                ?>
                                <?php if ($cs == 0) : ?>
                                  <li><a class="dropdown-item" href="#"><?= $s->descs ?></a></li>
                                <?php elseif ($cs > 0) : ?>
                                  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><?= $s->descs ?></a>
                                    <ul class="dropdown-menu">
                                      <?php foreach ($basemenu as $b) : ?>
                                        <li><a class="dropdown-item" href="#"><?= $b->descb ?></a></li>
                                      <?php endforeach; ?>
                                    </ul>
                                  </li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </ul>
                          </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </nav>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
        </div>
      <?php endif; ?>
      <!-- fin de barra de menu -->


      <div class="row">
        <div class="col">
          <!-- inicio de despliegue de datatable -->

          <?php if (empty($menu)) : ?>
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

                  <th>No Submenú</th>
                  <th>Status</th>
                  <th>Fecha creación</th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($menu as $m) : ?>
                  <tr>
                    <td><?= $m->idm ?> </td>
                    <td>
                      <?= $m->descm ?>
                    </td>

                    <td>
                      <?php
                      $db = \Config\Database::connect();
                      $sub = $db->query("SELECT * FROM submenu WHERE idm=$m->idm");
                      $submenu = $sub->getNumRows();
                      echo $submenu;
                      ?>

                    </td>
                    <td align="center"><?php if ($m->status == 1) {
                                          echo "<i class='far fa-check-circle' style='color: green;'></i> ";
                                        } else {
                                          echo "<i class='far   fa-times-circle' style='color: red;'></i>";
                                        } ?></td>
                    <td><?= $m->created_at ?></td>
                    <td align="center">
                      <div class="btn-group">
                        <a href="<?php echo base_url(); ?>/menu/<?= $m->idm ?>" class="btn btn-success btn-xs" title="Ver los datos generales del menú"><i class="fas fa-th-list"></i></a>
                        
                      </div>


                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>id</th>
                  <th>Descripcion</th>

                  <th>No Submenú</th>
                  <th>Status</th>
                  <th>Fecha creación</th>
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