<?php
$configModel = new \App\Models\Configurate_model($id);
$title = $configModel->getConfigfb(7);

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php if (!empty($title->ruta)) {
            echo $title->ruta;
          } else {
            echo "Sin titulo";
          }  ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('/') ?>/assets/logoCTL_ico.png" rel="icon">

  <!-- Google Fonts -->
  <link href="<?php echo base_url('/') ?>/public/https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url('/') ?>/public/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('/') ?>/public/assets/css/style.css" rel="stylesheet">

 <!-- Alertify -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/alertifyjs/css/themes/default.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
</head>

<body data-spy="scroll" data-target="#navbar-example">



<?= $this->renderSection('content') ?>
<?= $this->include('layouts/templatemenu') ?>

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>e</span>Business</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="<?php echo base_url('/') ?>/public/#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('/') ?>/public/#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('/') ?>/public/#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('/') ?>/public/#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="<?php echo base_url('/') ?>/public/#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="<?php echo base_url('/') ?>/public/https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="<?php echo base_url('/') ?>/public/#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/parallax/parallax.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/wow/wow.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('/') ?>/public/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/') ?>/public/assets/js/main.js"></script>

  <!-- Alertify -->
  <script src="<?php echo base_url() ?>/assets/alertifyjs/alertify.js"></script>
  <!-- js funcional -->
  <script src="<?php echo base_url('/') ?>/assets/maindata.js"></script>
</body>

</html>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <?php if (!empty($title->ruta)) {
            echo $title->ruta;
          } else {
            echo "Sin titulo";
          }  ?>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- inicia cuerpo de formulario de inicio de sesion -->
        <div class="card-body login-card-body">
          <p class="login-box-msg">Inicie sesión</p>

          <form id="frmauth" action="<?php echo base_url('/auth') ?>" method="post">
            <div class="input-group mb-3">
              <input type="hidden" class="form-control" name="ruta" id="ruta" value="<?php echo base_url('/dashboard') ?>">
              <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="fas fa-user"></i>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="contra" placeholder="Contraseña" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-flat btn-block">Entrar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>


          <p class="mb-1">
            <a href="forgot-password.html" class="ligasma">Olvidé mi contraseña</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center ligasma">Deseo registrarme</a>
          </p>
        </div>
        <!-- finaliza cuerpo de formulario -->
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->