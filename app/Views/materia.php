<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Titulo de la pagina <?php   echo $uri;  ?></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active"><?= $uri->getSegment(1) ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">



    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-12">
        <div class="card card-primary ">
          <div class="card-body">
            <h5 class="card-title">Materias dadas de alta en sapce</h5>
            
            <?php if(empty($materias)):?>
              <h1>No hay registros qué mostrar</h1>
            <?php else:?>
              
              <table id="listax" class="table table-sm table-bordered table-striped text-sm">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CREDITOS</th>
                    <th>STATUS</th>
                    <th>DEPARTAMENTO ACADEMICO</th>
                    <th>UNID</th>
                    <th>CREDITOS</th>
                    <th>ESPEC</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($materias as $ma):?>
                  <tr>
                    <td><?= $ma->idmat ?></td>
                    <td><?= $ma->nommat ?></td>
                    <td><?= $ma->credit ?></td>
                    <td><?= $ma->habil ?></td>
                    <td><?= $ma->depto ?></td>
                    <td><?= $ma->unid ?></td>
                    <td><?= $ma->cred ?></td>
                    <td><?= $ma->idesp ?></td>
                  </tr>
                  <?php endforeach;?>
                <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CREDITOS</th>
                    <th>STATUS</th>
                    <th>DEPARTAMENTO ACADEMICO</th>
                    <th>UNID</th>
                    <th>CREDITOS</th>
                    <th>ESPEC</th>
                  </tr>
                </tfoot>
              </table>
            <?php endif;?>
            <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>
      </div>


    </div>
    <!-- /.row -->
  </div>
  <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endsection() ?>