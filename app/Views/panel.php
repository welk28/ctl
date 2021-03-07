
<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agregando otro archiovo para editar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Ruta actual</li>
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
                 <h5 class="card-title">Card title <h1><?php echo $_SESSION['rfcp'].'/'.session('nombre'); ?></h1></h5> 

                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro temporibus suscipit sequi? Fuga recusandae consequatur, quod placeat, dolores aliquid quos in sequi, dolor quo ipsa numquam alias cupiditate ullam culpa.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad in deleniti dolore consequuntur voluptate est at, consequatur molestiae possimus dolorem inventore, ipsum tempore nemo fugit aliquid illum minima quam similique.
                Doloremque odio deleniti, soluta exercitationem iste voluptatum voluptatem delectus id veniam, quam earum ea quidem dolores consequatur cum tempora corporis ullam repellat hic error rem necessitatibus. Incidunt officia nihil quasi!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim ipsum cum harum sit, temporibus, molestias deserunt ab earum quidem esse voluptatem incidunt debitis consequuntur nesciunt, architecto ratione. Repudiandae, est ducimus?
                Unde quae corrupti dicta officia, reiciendis accusantium quisquam. Maxime culpa cumque ullam molestias assumenda, aut quidem porro quae aperiam expedita iure accusantium amet quam alias mollitia, voluptatum optio placeat consectetur?
                Harum ab, aliquam et, a similique commodi, nobis incidunt dolorum odit aut itaque ipsam qui sint voluptatem aperiam quis laudantium? Tempore quis quibusdam maiores porro recusandae quae modi non cum!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem dignissimos, unde porro beatae perferendis officiis magnam dolor minima doloremque esse fuga corrupti quasi! A necessitatibus repudiandae incidunt eaque, odio quaerat?
                Ipsam eos ut temporibus maiores, repellat assumenda aspernatur perspiciatis ex quo itaque commodi recusandae facere sed mollitia debitis laborum velit! Recusandae hic ea dolorem! Eum ipsam veniam expedita dicta in.
                Natus harum earum iste saepe expedita velit. Sunt omnis labore veritatis illo, numquam fugiat et laborum vitae repudiandae totam nisi, reprehenderit iure optio consequuntur unde. Voluptates eum voluptas maiores eius.
                Fugiat ipsum harum ducimus obcaecati. Illum id fugiat quasi. Error soluta voluptatibus at impedit modi repellendus nesciunt cum rem tempore consequuntur tempora ducimus provident fuga voluptate est et, eum esse.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>

          
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
<?= $this->endsection() ?>