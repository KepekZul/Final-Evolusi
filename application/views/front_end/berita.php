
    <section id="blog" class="container">
        <div class="center">
            <h2>Berita Keilmiahan</h2>
        </div>

        <div class="blog">
          <div class="row">
            <div class="col-md-10">
              <?php foreach($berita as $ar) {?>
                <div class="blog-item">
                  <div class="row">
                    <div class="col-xs-12 col-sm-2 text-center">
                      <div class="entry-meta">
                        <span id="publish_date"><?php echo $ar->tanggal; ?></span>
                        <span><i class="fa fa-user"></i>Administrator</span>
                        <span><i class=""></i><?php echo $ar->kategori; ?></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-10 blog-content">
                      <h2><a href="<?php echo base_url(); ?>berita/detail_berita/<?php echo $ar->id; ?>"><?php echo $ar->judul; ?></a></h2>
                      <a href="#"><img class="img-responsive img-blog" src="<?php echo base_url(); ?>assets/images/<?php echo $ar->foto; ?>" width="100%" alt="" /></a>
                      <h3><?php $isi = $ar->isi; echo substr($isi, 0, 275); echo '...'; ?></h3>
                      <a class="btn btn-primary readmore" href="<?php echo base_url(); ?>berita/detail_berita/<?php echo $ar->id; ?>">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div><!--/.blog-item-->
                <?php } ?>
              </div><!--/.col-md-8-->
            </div><!--/.row-->
            <div class="row" style="text-align:center;">
              <ul class="pagination pagination-lg" style="text-align:center;">
                <?php if($awal != 1) {?>
                  <li><a href="<?php echo base_url(); ?>berita/index/all/<?php $prev = $awal - 3; echo $prev; ?>/3"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
                <?php } ?>
                  <!-- <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li> -->
                <?php if($akhir < $jumlah) {?>
                  <li><a href="<?php echo base_url(); ?>berita/index/all/<?php $next = $awal + 3; echo $next; ?>/3">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
                <?php } ?>
                </ul><!--/.pagination-->
            </div>


            </div>
    </section><!--/#blog-->
