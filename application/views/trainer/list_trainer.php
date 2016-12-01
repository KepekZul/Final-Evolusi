<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-table"></i> Trainer</h2>

    <!-- Breadcrumb -->
     <div class="bread-crumb pull-right">
      <a href="<?php echo site_url("trainer/list"); ?>"><i class="fa fa-home"></i>Trainer</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="#" class="bread-current">List Trainer</a>
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
                <?php if ($this->session->userdata('role') == 'admin'){ ?>
                  <a href="<?php echo site_url("trainer/tambah"); ?>"><i class="fa fa-plus"> Tambah Baru</i></a>
                  <?php } ?>
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
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Angkatan</th>
                            <th>Jurusan</th>
                            <th>Email</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $nomor = 1; ?>
                          <?php foreach($trainer as $ar){ ?>
                            <tr>
                              <td><?php echo $nomor ?></td>
                              <td><?php echo $ar->nama ?></td>
                              <td><?php echo $ar->nrp ?></td>
                              <td><?php echo $ar->angkatan ?></td>
                              <td><?php echo $ar->jurusan."/".$ar->fakultas ?></td>
                              <td><?php echo $ar->email ?></td>
                              <td>
                                <a href="#detail<?php echo $ar->id; ?>" data-toggle="modal"><button class="btn btn-xs btn-success"><i class="fa fa-search-plus"></i> </button></a>
                                <div id="detail<?php echo $ar->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Detail Trainer</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">

                                          <div class="col-md-12">
                                            <div class="widget-content">
                                              <div class="padd">

                                                <br />
                                                <!-- Form starts.  -->
                                                <form class="form-horizontal" role="form" action="#" method="post">

                                                  <input type="hidden" name="id" id="id" class="form-control" placeholder="<?php echo $ar->id; ?>" value="<?php echo $ar->id; ?>" readonly="readonly">


                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Nama</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="nama" id="nama" class="form-control" placeholder="<?php echo $ar->nama; ?>" value="<?php echo $ar->nama; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">NRP</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="NRP" id="NRP" class="form-control" placeholder="<?php echo $ar->nrp; ?>" value="<?php echo $ar->nrp; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Angkatan</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="Angkatan" id="Angkatan" class="form-control" placeholder="<?php echo $ar->angkatan; ?>" value="<?php echo $ar->angkatan; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Jurusan</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="jurusan" id="Jurusan" class="form-control" placeholder="<?php echo $ar->jurusan; ?>" value="<?php echo $ar->jurusan; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Fakultas</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="Fakultas" id="Fakultas" class="form-control" placeholder="<?php echo $ar->fakultas; ?>" value="<?php echo $ar->fakultas; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">HP</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="HP" id="HP" class="form-control" placeholder="<?php echo $ar->hp; ?>" value="<?php echo $ar->hp; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Email</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="Email" id="Email" class="form-control" placeholder="<?php echo $ar->email; ?>" value="<?php echo $ar->email; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Kota</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="asal_kota" id="asal_kota" class="form-control" placeholder="<?php echo $ar->asal_kota; ?>" value="<?php echo $ar->asal_kota; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Provinsi</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="asal_provinsi" id="asal_provinsi" class="form-control" placeholder="<?php echo $ar->asal_provinsi; ?>" value="<?php echo $ar->asal_provinsi; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Line</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="Line" id="Line" class="form-control" placeholder="<?php echo $ar->line; ?>" value="<?php echo $ar->line; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">twitter</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="twitter" id="twitter" class="form-control" placeholder="<?php echo $ar->twitter; ?>" value="<?php echo $ar->twitter; ?>" readonly="readonly">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label class="col-lg-2 control-label">Facebook</label>
                                                    <div class="col-lg-5">
                                                      <input type="text" name="Facebook" id="Facebook" class="form-control" placeholder="<?php echo $ar->facebook; ?>" value="<?php echo $ar->facebook; ?>" readonly="readonly">
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
                                </div>
                                <?php if ($this->session->userdata('role') == 'admin'){ ?>
                                  <a data-target="#edit<?php echo $ar->id; ?>" data-toggle="modal"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button></a>
                                  <div id="edit<?php echo $ar->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h4 class="modal-title">Edit Trainer</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">

                                            <div class="col-md-12">
                                              <div class="widget-content">
                                                <div class="padd">

                                                  <br />
                                                  <!-- Form starts.  -->
                                                  <form class="form-horizontal" role="form" action="<?php echo site_url("trainer/update"); ?>" method="post">

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
                                  </div>
                                  <a href="<?php echo site_url("trainer/hapus/$ar->id"); ?>"><button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus"><i class="fa fa-times"></i> </button></a>
                                  <?php } ?>

                                </td>
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
