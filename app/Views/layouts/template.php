<?php
$configModel = new \App\Models\Configurate_model($id);

$fb = $configModel->getConfigfb(1);
$tw = $configModel->getConfigfb(2);
$tel = $configModel->getConfigfb(3);
$mail = $configModel->getConfigfb(4);
$cel = $configModel->getConfigfb(5);
$ig = $configModel->getConfigfb(6);
$title = $configModel->getConfigfb(7);

?>
<!DOCTYPE html>
<html lang="en">

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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

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
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class=" d-flex pl-3 pr-3">

      <div class="logo mr-auto ">

        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="<?php echo base_url('/') ?>/assets/logoCTL_ico.png" alt="" class="img-fluid"></a>
      </div>
      <?php
      //selecciona todos los menú activos del sitio
      $db = \Config\Database::connect();
      $consulta = $db->query("select * from menu where status=1");
      $menu = $consulta->getResult();
      //print_r($resultado);
      ?>
      <nav class="nav-menu d-none d-lg-block pb-5">
        <ul>
          <li class="active"><a href="<?php echo base_url('/') ?>">Inicio</a> </li>
          <?php if (empty($menu)) : ?>
            <div class="alert alert-danger" role="alert">
              No hay opciones de menú
            </div>

          <?php else : ?>
            <?php foreach ($menu as $m) : ?>
              <?php
              //de los menús obtenidos, verificar si tiene submenu, dependiendo de ello, mostrar un submenú o liga simple
              $consulta = $db->query("select * from submenu where status=1 and idm=$m->idm");
              $cm = $consulta->getNumRows();
              $submenu = $consulta->getResult();
              ?>
              <?php if ($cm == 0) : ?>
                <li><a href="index.html"><?= $m->descm ?></a></li>
              <?php elseif ($cm > 0) : ?>
                <li class="drop-down"><a href="index.html"><?= $m->descm ?></a>
                  <ul>
                    <?php foreach ($submenu as $s) : ?>
                      <?php //verificar si el submenú tiene más opciones para generar su baseMenu, si no, solo colocar simple
                      $consulta = $db->query("select * from basemenu where status=1 and ids=$s->ids");
                      $cs = $consulta->getNumRows();
                      $basemenu = $consulta->getResult();
                      ?>
                      <?php if ($cs == 0) : ?>
                        <li><a href="#"><?= $s->descs ?></a></li>
                      <?php elseif ($cs > 0) : ?>
                        <li class="drop-down"><a href="#"><?= $s->descs ?></a>
                          <ul>
                            <?php foreach ($basemenu as $b) : ?>
                              <li><a href="#"><?= $b->descb ?></a></li>
                            <?php endforeach; ?>
                          </ul>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
          <li><a href="#" data-toggle="modal" data-target="#modal-default"><i class="fas fa-user"></i> Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <div class="division"> </div>
  <div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('/')?>/public/img/la.jpg" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('/')?>/public/img/chicago.jpg" alt="Chicago" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('/')?>/public/img/ny.jpg" alt="New York" width="1100" height="500">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
    </div>
    
  <main id="main mt-5">

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="<?php echo base_url('/') ?>/public/assets/img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Assumenda repud eum veniam</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="<?php echo base_url('/') ?>/public/assets/img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="<?php echo base_url('/') ?>/public/assets/img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our eBusiness company</h3>
              <a class="sus-btn" href="#">Get A quate</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>
                    Call: +1 5589 55488 55<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    Email: info@example.com<br>
                    <span>Web: www.example.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Location: A108 Adam Street<br>
                    <span>NY 535022, USA</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

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
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
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
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="<?php echo base_url('/') ?>/public/assets/img/portfolio/6.jpg" alt=""></a>
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
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
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
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('/') ?>/public/assets/js/main.js"></script>
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