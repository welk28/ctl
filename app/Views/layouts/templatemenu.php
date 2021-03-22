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

 