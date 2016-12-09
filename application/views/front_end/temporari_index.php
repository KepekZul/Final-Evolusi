
<section id="main-slider" class="no-margin">
  <div class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/perkenalan.jpg)">
        <div class="container">
          <div class="row slide-margin">
            <div class="col-sm-6">
              <!-- <div class="carousel-content">
              <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
              <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
              <a class="btn-slide animation animated-item-3" href="#">Read More</a>
            </div> -->
          </div>


        </div>
      </div>
    </div><!--/.item-->

    <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/images/foto_trainer.jpg); " width=720px;>
      <div class="container">
        <div class="row slide-margin">
          <div class="col-sm-6">

          </div>



        </div>
      </div>
    </div><!--/.item-->

    <div class="item" style="background-image: url(<?php echo base_url(); ?>assets/images/its.jpg)">
      <div class="container">
        <div class="row slide-margin">
          <div class="col-sm-6">
            <div class="carousel-content">
              <h1 class="animation animated-item-1" style="color:white;">One Vision!</h1>
              <h1 class="animation animated-item-2">One Action!!</h1>
              <h1 class="animation animated-item-2">For Better Nation!!!</h1>
            </div>
          </div>
          <div class="col-sm-6 hidden-xs animation animated-item-4">

          </div>
        </div>
      </div>
    </div><!--/.item-->
  </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev" style="background-color:rgba(197,45,47,0.45)" >
  <i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next" style="background-color:rgba(197,45,47,0.45)">
  <i class="fa fa-chevron-right"></i>
</a>
</section><!--/#main-slider-->

<section id="feature" >
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Visi Navigator</h2>
      <p class="lead">Navigator Keilmiahan untuk mewujudkan mahasiswa ITS yang prestatif, bermanfaat dan inspiratif dengan semangat integritas demi kejayaan almamater dan bangsa.</p>
    </div>

    <div class="center wow fadeInDown">
      <h2>Misi Navigator</h2>
      <ol style="text-align:left; margin-left:250px;">
        <li>Meningkatkan budaya prestatif mahasiswa ITS tingkat nasional dan internasional.</li>
        <li>Navigator pengembangan karya dan teknologi mahasiswa ITS yang bermanfaat.</li>
        <li>Menjadi role model keilmiahan inspiratif.</li>
        <li>Keselarasan elemen pergerakan keilmiahan KM ITS.</li>
      </ol>
    </div>
  </div><!--/.container-->
</section><!--/#feature-->

<section id="services" class="service-item">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Our Service</h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/services/services1.png">
          </div>
          <div class="media-body">
            <h3 class="media-heading" >Pemateri/<br>Pembicara<br>. </h3>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/services/services2.png">
          </div>
          <div class="media-body">
            <h3 class="media-heading">KOREKSI<br>KTI</h3>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/services/services3.png">
          </div>
          <div class="media-body">
            <h3 class="media-heading">SLEEP <br> OVER <br> NIGHT</h3>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-3">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/services/services4.png">
          </div>
          <div class="media-body">
            <h3 class="media-heading">ROADSHOW <br> TFT</h3>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/#services-->

<section id="content">
  <div class="container">
    <div class="center wow fadeInDown" style="margin-top:-20px;">
      <h2>Berita</h2>
    </div>
    <div class="row">
      <?php foreach($berita as $b){ ?>
        <div class="col-xs-12 col-sm-4 wow fadeInDown">
          <div class="testimonial">

            <div class="media testimonial-inner">
              <div class="pull-left">
                <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/<?php echo $b->foto ?>">
              </div>
              <div class="media-body">
                <h2><?php echo $b->judul; ?></h2>
                <!-- <p>
                  <?php //echo substr($b->isi, 0, 50); ?>
                </p> -->
                <span><strong><?php echo substr($b->tanggal, 8, 2); echo "-"; echo substr($b->tanggal, 5, 2); echo "-"; echo substr($b->tanggal, 0, 4); ?></strong></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/#content-->

<section id="partner">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2 style="color:#140323;">Info Lomba</h2>
    </div>
    <?php
      $i = 1;
      foreach($lomba as $l) {
     ?>
     <?php if($i == 1) { ?>
      <div class="row">
     <?php } ?>
        <div class="col-xs-12 col-sm-6 wow fadeInDown">
          <div class="testimonial">
            <h2 style="text-align:center; color:black;"><?php echo $l->judul; ?></h2>
            <div class="media testimonial-inner">
              <div class="pull-left">
                <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/<?php echo $l->foto; ?>">
              </div>
              <div class="media-body">
                <p style="color:black; text-align:left;"><?php echo $l->deskripsi_singkat; ?></p>
                <span style="color:black; text-align:left;"><strong>Pendaftaran: </strong><?php echo $l->pendaftaran_tanggal; ?></span>
              </div>
            </div>
          </div>
        </div>
       <?php if($i == 2) {?>
        </div>
        <br>
        <?php } ?>
      <?php
          if($i == 1) $i=2;
          else $i = 1;
        }
      ?>
      <!-- <div class="col-xs-12 col-sm-6 wow fadeInDown">
        <div class="testimonial">
          <h2 style="text-align:center; color:black;">PKM 2016</h2>
          <div class="media testimonial-inner">
            <div class="pull-left">
              <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/testimonials1.png">
            </div>
            <div class="media-body">
              <p style="color:black; text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              <span style="color:black; text-align:left;"><strong>Pendaftaran: </strong>1 September - 29 Oktober 2016</span>
            </div>
          </div>
        </div>
      </div> -->

    <!-- <div class="row">
      <div class="col-xs-12 col-sm-6 wow fadeInDown">
        <div class="testimonial">
          <h2 style="text-align:center; color:black;">PKM 2016</h2>
          <div class="media testimonial-inner">
            <div class="pull-left">
              <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/testimonials1.png">
            </div>
            <div class="media-body">
              <p style="color:black; text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              <span style="color:black; text-align:left;"><strong>Pendaftaran: </strong>1 September - 29 Oktober 2016</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 wow fadeInDown">
        <div class="testimonial">
          <h2 style="text-align:center; color:black;">PKM 2016</h2>
          <div class="media testimonial-inner">
            <div class="pull-left">
              <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/testimonials1.png">
            </div>
            <div class="media-body">
              <p style="color:black; text-align:left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              <span style="color:black; text-align:left;"><strong>Pendaftaran: </strong>1 September - 29 Oktober 2016</span>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </div><!--/.container-->
</section><!--/#partner-->

<section id="recent-works">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Galeri</h2>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri1.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme</a> </h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri1.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri2.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme</a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri3.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme </a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri4.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme </a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri5.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme</a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme </a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme </a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="javascript:void(0)" onclick="location.href='#';">Business theme </a></h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
              <a class="preview" href="<?php echo base_url(); ?>assets/images/gallery/galeri6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/#recent-works-->
<div class="get-started center wow fadeInDown" style="margin-top:-5%;">
  <h2>Kontak Kami</h2>
  <img src="<?php echo base_url(); ?>assets/images/Logo_Navigator.png" alt="" width="200px" />
  <br><br>
  <div>
    <div class="social" style="text-align:center;">
      <ul class="social-share">
        <li><a href="javascript:void(0)" onclick="location.href='#';" style="width:30px; height:30px; line-height:30px;"><i class="fa fa-facebook"></i></a>   Trainer Keilmiahan ITS     </li>
        <li ><a href="javascript:void(0)" onclick="location.href='#';"style="width:30px; height:30px; line-height:30px;"><i class="fa fa-twitter"></i></a>   @Trainer_ITS</li>
        <li><a href="javascript:void(0)" onclick="location.href='#';" style="width:30px; height:30px; line-height:30px;"><i class="fa fa-line ">Line</i></a>   @dqp0410b</li>
        <li><a href="javascript:void(0)" onclick="location.href='#';" style="width:30px; height:30px; line-height:30px;"><i class="fa fa-envelope"></i></a>   trainer.navigator@gmail.com</li>
        <li><a href="javascript:void(0)" onclick="location.href='#';" style="width:30px; height:30px; line-height:30px;"><i class="fa fa-globe"></i></a>   trainer.its.ac.id</li>
      </ul>
      <div class="search">
        <form role="form">
          <input type="text" class="search-form" autocomplete="off" placeholder="Search">
          <i class="fa fa-search"></i>
        </form>
      </div>
    </div>
  </div>
</div><!--/.get-started-->
