<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Request Training</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';"><i class="fa fa-home"></i>Pengguna</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">Request Training</a>
    </div>

    <div class="clearfix"></div>

  </div>
  <!-- Page heading ends -->


  <!-- Matter -->

  <div class="matter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

                <?php if($this->session->flashdata('success')): ?>
                <div class="col-md-12"><div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div></div>
                <?php endif; ?>

          <div class="widget">
            <div class="widget-head">
              <div class="pull-left">Request Training</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">
                    
                    <form class="form-horizontal" role="form" action="<?php echo site_url("user/request"); ?>" method="post">

                       <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Acara</label>
                        <div class="col-lg-5">
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Acara" >
                        </div>
                      </div>

                      <div class="form-group" >
                        <label class="col-lg-2 control-label">Tanggal Mulai</label>
                        <div class="col-lg-5">
                          <input type="date" name="mulai" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tanggal Selesai</label>
                        <div class="col-lg-5">
                          <input type="date" name="selesai" class="form-control"  >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Lokasi</label>
                        <div class="col-lg-5">
                          <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Lokasi Pelaksanaan" >
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-lg-2 control-label">Contact Person</label>
                        <div class="col-lg-5">
                          <input type="text" name="cp" id="lokasi" class="form-control" placeholder="Kontak yang bisa dihubungi" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Deskripsi</label>
                        <div class="col-lg-5">
                          <textarea rows="8" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Acara" ></textarea>
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-6">
                          <button type="Submit" class="btn btn-sm btn-primary" value="submit">Submit</button>
                        </div>
                      </div>

                    </form>
                    

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
 
