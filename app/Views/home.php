<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="division pt-5"> </div>
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
            <img src="<?php echo base_url('/') ?>/public/img/la.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('/') ?>/public/img/chicago.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('/') ?>/public/img/ny.jpg" alt="New York" width="1100" height="500">
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
    

    <?php foreach ($datos as $m) : ?>
      <!-- ======= Blog Section ======= -->
      <?php 
      $db=\Config\Database::connect();
      $query= $db->query("SELECT p.idpost, p.created_at, p.imgp, p.idm, m.descm, p.ids, p.idb, p.titulo, p.descripcion FROM post p, menu m WHERE p.idm=m.idm AND m.status=1 AND p.status=1 AND m.idm=$m->idm");
      $post=$query->getResult();

      ?>
      <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2><?= $m->descm ?></h2>
                </div>
              </div>
            </div>
            <div class="row">
            <?php foreach($post as $p):?>
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 ">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog.html">
                      <img src="<?php echo base_url('/') ?>/public/img/post/<?= $p->imgp ?>.jpg" alt=""> 
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">13 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i><?= $p->created_at ?>
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="blog.html"><?= $p->titulo ?></a>
                    </h4>
                    <p>
                      <?= $p->descripcion ?>
                    </p>
                  </div>
                  <span>
                    <a href="blog.html" class="ready-btn">Leer más</a>
                  </span>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <?php endforeach;?>
            </div>
            
          </div>
        </div>
      </div><!-- End Blog Section -->
    <?php endforeach; ?>
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
  <?= $this->endsection() ?>