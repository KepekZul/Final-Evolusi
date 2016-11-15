<?php foreach($lomba as $ar) { ?>
  <section id="blog" class="container">
    <div class="center">
      <h2><?php echo $ar->judul; ?></h2>
    </div>

    <div class="blog">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 ">
          <div class="blog-item">
            <div class="row">
              <div class="col-md-6">
                <img class="img-responsive img-blog" src="<?php echo base_url(); ?>assets/images/<?php echo $ar->foto; ?>"  alt="" />
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-4">
                    <div class="entry-meta">
                      <span id="publish_date"><?php echo $ar->tanggal; ?></span>
                      <span><i class="fa fa-user"></i>Administrator</span>
                      <span><i class=""></i><?php echo $ar->kategori ?></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p> <?php echo $ar->isi; ?> </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!--/.blog-item-->

        </div><!--/.col-md-8-->

      </div><!--/.row-->

    </div><!--/.blog-->

  </section><!--/#blog-->

  <?php } ?>
