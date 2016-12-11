<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-table"></i> Pengguna</h2>

    <!-- Breadcrumb -->
     <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';"><i class="fa fa-home"></i>Pengguna</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">List Request Training</a>
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
              <div class="pull-left">List Request Training</div>
              <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">

                  <!-- Table Page -->
                  <div class="page-tables">
                    <!-- Table -->
                    <div class="table-responsive">
                      <table cellpadding="0" cellspacing="0" border="0" id="data-table" width="100%">
                        <thead>
                          <tr>
                            <th style="width:25px;">No</th>
                            <th>Nama Acara</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Detail</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1; ?>
                          <?php foreach($user as $ar){ ?>
                            <tr>
                              <td><?php echo $nomor ?></td>
                              <td><?php echo $ar->nama ?></td>
                              <td><?php echo date('d-M-Y', strtotime($ar->tanggal_mulai)); ?></td>
                              <td><?php echo date('d-M-Y', strtotime($ar->tanggal_selesai)); ?></td>
                              <td><?php echo $ar->lokasi ?></td>
                              <?php if($ar->status == 0){ ?><td><b><font color="blue">Menunggu Konfirmasi</font></b></td><?php } ?>
                              <?php if($ar->status == 1){ ?><td><b><font color="green">Request Diterima</font></b></td><?php } ?>
                              <?php if($ar->status == 2){ ?><td><b><font color="red">Request Ditolak</font></b></td><?php } ?>
                              <td><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("user/request_detail/$ar->id"); ?>';" style="color:black;"><i class="fa fa-edit"><b> Klik untuk melihat detail</b></i></a></td>
                            </tr>
                            <?php  $nomor = $nomor + 1 ;} ?>
                          </tbody>

                          </table>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>


                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
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
