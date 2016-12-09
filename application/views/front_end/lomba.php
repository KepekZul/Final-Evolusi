<section id="blog" class="container">
  <div class="center">
    <h2>Informasi Lomba</h2>
  </div>

  <div class="blog">
    <div class="row">
      <div class="col-md-10">
        <?php foreach($lomba as $ar) {?>
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
                <!-- <a href="javascript:void(0)" onclick="location.href='#"><img class="img-responsive img-blog" src="<?php echo base_url(); ?>assets/images/<?php echo $ar->foto; ?>" width="100%" alt="" /></a> -->
                <h2><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("lomba/detail/$ar->id"); ?>';"><?php echo $ar->judul; ?></a></h2>
                <h3><?php $isi = $ar->isi; echo substr($isi, 0, 275); echo '...'; ?></h3>
                <a class="btn btn-primary readmore" href="<?php echo site_url("lomba/detail/$ar->id"); ?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div><!--/.blog-item-->
          <?php } ?>
        </div><!--/.col-md-8-->
      </div><!--/.row-->
      <div class="row" style="text-align:center;">
        <ul class="pagination pagination-lg" style="text-align:center;">
          <?php if($awal != 1) { $prev = $awal - 3; ?>
            <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("lomba/index/all/$prev/3"); ?>';"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
            <?php } ?>
            
            <?php if($akhir < $jumlah) { $next = $awal + 3; ?>
              <li><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("lomba/index/all/$next/3"); ?>';">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
              <?php } ?>
            </ul><!--/.pagination-->
          </div>


        </div>
      </section><!--/#blog-->
