<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Data Pengguna</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='#';"><i class="fa fa-home"></i>Pengguna</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">Detail Request</a>
    </div>

    <div class="clearfix"></div>

  </div>
  <!-- Page heading ends -->


  <!-- Matter -->

  <div class="matter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="widget">
            <div class="widget-head">
              <div class="pull-left">Detail Request</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">
                    
                    <h3>Nama : <?php echo $user->nama; ?></h3>
                    <h3>Tanggal Mulai : <?php echo date('d-M-Y', strtotime($user->tanggal_mulai)); ?></h3>
                    <h3>Tanggal Selesai : <?php echo date('d-M-Y', strtotime($user->tanggal_selesai)); ?></h3>
                    <h3>Lokasi : <?php echo $user->lokasi; ?></h3>
                    <h3>Contact Person : <?php echo $user->cp; ?></h3>
                    <h3>Deskripsi : <br><br><p><?php echo $user->deskripsi; ?></p></h3>
                    <?php if($user->status == 0){ ?><h3>Status : <b><font color="blue">Menunggu Konfirmasi</font></b></h3><?php } ?>
                    <?php if($user->status == 1){ ?><h3>Status : <b><font color="green">Request Diterima</font></b></h3><?php } ?>
                    <?php if($user->status == 2){ ?><h3>Status : <b><font color="red">Request Ditolak</font></b></h3><?php } ?>
                    <?php if($user->status == 1 && $role == 'user'){ ?>
                      <h3>Diterima Oleh : <?php echo $user->confirmedby; ?></h3>
                      <h3>Contact Person : <?php echo $user->noconfirmedby; ?></h3>
                    <?php } ?>
                    <?php if($user->status == 2 && $role == 'user'){ ?>
                      <h3>Ditolak Oleh : <?php echo $user->confirmedby; ?></h3>
                      <h3>Contact Person : <?php echo $user->noconfirmedby; ?></h3>
                    <?php } ?>
                    <?php if($user->status == 0 && $role == 'trainer'){ ?>
                    <br><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("user/request_terima/$user->id"); ?>';" class="btn btn-primary" ><b> TERIMA</b></a>
                    <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("user/request_tolak/$user->id"); ?>';" class="btn btn-danger" ><b> TOLAK</b></a>
                    <?php } ?>
                  </div>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>

      <!-- Matter ends -->

    </div>

    <!-- Mainbar ends -->
    <div class="clearfix"></div>

  </div>
  <!-- Content ends -->
