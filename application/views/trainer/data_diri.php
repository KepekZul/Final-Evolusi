<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Data Trainer</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="index.html"><i class="fa fa-home"></i> Home</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="#" class="bread-current">Dashboard</a>
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
              <div class="pull-left">Data Trainer</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="widget-content">
                <div class="padd">
                  <?php foreach($trainer as $ar){ ?>
                    <form class="form-horizontal" role="form" action="<?php echo base_url(); ?>trainer/update_trainer" method="post">

                      <input type="hidden" name="id" id="id" class="form-control" placeholder="<?php echo $ar->id; ?>" value="<?php echo $ar->id; ?>" readonly="readonly">

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama</label>
                        <div class="col-lg-5">
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="<?php echo $ar->nama; ?>" value="<?php echo $ar->nama; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">NRP</label>
                        <div class="col-lg-5">
                          <input type="text" name="NRP" id="NRP" class="form-control" placeholder="<?php echo $ar->nrp; ?>" value="<?php echo $ar->nrp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Angkatan</label>
                        <div class="col-lg-5">
                          <input type="text" name="Angkatan" id="Angkatan" class="form-control" placeholder="<?php echo $ar->angkatan; ?>" value="<?php echo $ar->angkatan; ?>">
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
                          <input type="text" name="Fakultas" id="Fakultas" class="form-control" placeholder="<?php echo $ar->fakultas; ?>" value="<?php echo $ar->fakultas; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">HP</label>
                        <div class="col-lg-5">
                          <input type="text" name="HP" id="HP" class="form-control" placeholder="<?php echo $ar->hp; ?>" value="<?php echo $ar->hp; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-5">
                          <input type="text" name="Email" id="Email" class="form-control" placeholder="<?php echo $ar->email; ?>" value="<?php echo $ar->email; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kota</label>
                        <div class="col-lg-5">
                          <input type="text" name="asal_kota" id="asal_kota" class="form-control" placeholder="<?php echo $ar->asal_kota; ?>" value="<?php echo $ar->asal_kota; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Provinsi</label>
                        <div class="col-lg-5">
                          <input type="text" name="asal_provinsi" id="asal_provinsi" class="form-control" placeholder="<?php echo $ar->asal_provinsi; ?>" value="<?php echo $ar->asal_provinsi; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Line</label>
                        <div class="col-lg-5">
                          <input type="text" name="Line" id="Line" class="form-control" placeholder="<?php echo $ar->line; ?>" value="<?php echo $ar->line; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">twitter</label>
                        <div class="col-lg-5">
                          <input type="text" name="twitter" id="twitter" class="form-control" placeholder="<?php echo $ar->twitter; ?>" value="<?php echo $ar->twitter; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-lg-2 control-label">Facebook</label>
                        <div class="col-lg-5">
                          <input type="text" name="Facebook" id="Facebook" class="form-control" placeholder="<?php echo $ar->facebook; ?>" value="<?php echo $ar->facebook; ?>">
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
