<?php $session = session();

//selecciona todos los menú activos del sitio
$db = \Config\Database::connect();
$consulta = $db->query("SELECT * FROM datesite WHERE id=1");
$dsite = $consulta->getRow();
//print_r($resultado);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php if (!empty($dsite->titulo)) {
      echo $dsite->titulo;
    } else {
      echo "Sin titulo";
    }  ?>
  </title>
  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/public/uploads/<?=$dsite->icono ?>" rel="icon">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/mainstyle.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/summernote/summernote-bs4.css">
  <!-- SweetAlert -->
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/sweetalert/sweetalert2.min.css">
   <!-- Alertify -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/alertifyjs/css/themes/default.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
  <h1><?= $session->rfcp ?></h1>
  <div class="wrapper">


    <?= $this->include('layouts/navbar') ?>
    <?= $this->include('layouts/menu') ?>
    <div class="content-wrapper">
      <?= $this->renderSection('content') ?>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Main Footer -->
    <footer class="main-footer text-sm">
      <strong>Sin registro &copy; 2021 <a href="#">CodeDx</a>.</strong>
      Algunos derechos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Popper -->
  <script src="<?php echo base_url() ?>/assets/popper.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>/assets/dist/js/adminlte.js"></script>
  <!-- OPTIONAL SCRIPTS -->
  <script src="<?php echo base_url() ?>/assets/dist/js/demo.js"></script>
  <!-- PAGE PLUGINS -->
  <!-- DataTables -->
  <script src="<?php echo base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- jQuery Mapael -->
  <script src="<?php echo base_url() ?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url() ?>/assets/plugins/chart.js/Chart.min.js"></script>

  <!-- PAGE SCRIPTS -->
  <script src="<?php echo base_url() ?>/assets/dist/js/pages/dashboard2.js"></script>
  <!-- JS CONTROL GENERAL -->
  <script src="<?php echo base_url() ?>/assets/admindata.js"></script>
  <!-- Select2 -->
<script src="<?php echo base_url() ?>/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url()?>/assets/sweetalert/sweetalert2.all.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url() ?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
 <!-- Alertify -->
 <script src="<?php echo base_url() ?>/assets/alertifyjs/alertify.js"></script>

</body>

</html>
<script>
  $(function() {
        

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    
    $('.textarea').summernote()

    $("#listax").DataTable({
      "responsive": true,
      "autoWidth": false,
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "zeroRecords": "No se encontraron resultados en su busqueda",
        "searchPlaceholder": "Buscar registros",
        "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
        "infoEmpty": "No existen registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "paginate": {
          "first": "Primero",
          "last": "Último",
          "next": "Siguiente",
          "previous": "Anterior"
        },
      }
    }, );

  });
</script>
