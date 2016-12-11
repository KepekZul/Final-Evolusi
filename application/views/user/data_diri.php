<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Data Pengguna</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("trainer/list"); ?>';"><i class="fa fa-home"></i>Pengguna</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">Data Pengguna</a>
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
              <div class="pull-left">Data Pengguna</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">
                  <?php foreach($user as $ar){ ?>
                    <form class="form-horizontal" role="form" action="<?php echo site_url("user/update"); ?>" method="post">

                       <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-5">
                          <input type="text" name="email" id="Email" class="form-control" placeholder="<?php echo $ar->email; ?>" value="<?php echo $ar->email; ?>" readonly>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-5">
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="<?php echo $ar->nama; ?>" value="<?php echo $ar->nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">NRP</label>
                        <div class="col-lg-5">
                          <input type="text" name="nrp" id="NRP" class="form-control" placeholder="<?php echo $ar->nrp; ?>" value="<?php echo $ar->nrp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Angkatan</label>
                        <div class="col-lg-5">
                          <input type="text" name="angkatan" id="Angkatan" class="form-control" placeholder="<?php echo $ar->angkatan; ?>" value="<?php echo $ar->angkatan; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Jurusan</label>
                        <div class="col-lg-5">
                          <input type="text" name="jurusan" id="Jurusan" class="form-control" placeholder="<?php echo $ar->jurusan; ?>" value="<?php echo $ar->jurusan; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Fakultas</label>
                        <div class="col-lg-5">
                          <input type="text" name="fakultas" id="Fakultas" class="form-control" placeholder="<?php echo $ar->fakultas; ?>" value="<?php echo $ar->fakultas; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">HP</label>
                        <div class="col-lg-5">
                          <input type="text" name="hp" id="HP" class="form-control" placeholder="<?php echo $ar->hp; ?>" value="<?php echo $ar->hp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Alamat</label>
                        <div class="col-lg-5">
                          <input type="text" name="alamat" id="HP" class="form-control" placeholder="<?php echo $ar->alamat; ?>" value="<?php echo $ar->alamat; ?>">
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-6">
                          <button type="Submit" class="btn btn-sm btn-primary" value="submit">Update</button>
                        </div>
                      </div>

                    </form>
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
