<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Tambah Trainer</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='#';"><i class="fa fa-home"></i>Trainer</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">Tambah Trainer</a>
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
              <div class="pull-left">tambah Trainer</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">
                    <form class="form-horizontal" role="form" action="<?php echo site_url("trainer/post"); ?>" method="post">
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-5">
                          <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">NRP</label>
                        <div class="col-lg-5">
                          <input type="text" name="NRP" id="NRP" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Angkatan</label>
                        <div class="col-lg-5">
                          <input type="text" name="Angkatan" id="Angkatan" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Jurusan</label>
                        <div class="col-lg-5">
                          <input type="text" name="jurusan" id="Jurusan" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Fakultas</label>
                        <div class="col-lg-5">
                          <input type="text" name="Fakultas" id="Fakultas" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">HP</label>
                        <div class="col-lg-5">
                          <input type="text" name="HP" id="HP" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-5">
                          <input type="text" name="Email" id="Email" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-5">
                          <input type="password" name="pass" id="pass" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kota</label>
                        <div class="col-lg-5">
                          <input type="text" name="asal_kota" id="asal_kota" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Provinsi</label>
                        <div class="col-lg-5">
                          <input type="text" name="asal_provinsi" id="asal_provinsi" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Line</label>
                        <div class="col-lg-5">
                          <input type="text" name="Line" id="Line" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">twitter</label>
                        <div class="col-lg-5">
                          <input type="text" name="twitter" id="twitter" class="form-control" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Facebook</label>
                        <div class="col-lg-5">
                          <input type="text" name="Facebook" id="Facebook" class="form-control" >
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-6">
                          <button type="Submit" class="btn btn-sm btn-primary" value="submit">Tambah</button>
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
  <!-- Content ends -->
