<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-table"></i> Berita</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="<?php echo site_url("berita/list"); ?>"><i class="fa fa-home"></i>Berita</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="#" class="bread-current">List Berita</a>
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
              <div class="pull-left">Data Berita</div>
              <div class="widget-icons pull-right">
                <a href="<?php echo site_url("berita/tambah"); ?>"><i class="fa fa-plus"> Tambah Baru</i></a>
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
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>Kategori</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $nomor = 1; ?>
                        <?php foreach($berita as $ar){ ?>
                          <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $ar->judul ?></td>
                            <td><?php echo $ar->tanggal ?></td>
                            <td><?php echo $ar->kategori ?></td>
                            <td>
                              <a href="<?php echo site_url("berita/detail/$ar->id"); ?>" data-toggle="tooltip" title="Detail"><button class="btn btn-xs btn-success"><i class="fa fa-search-plus"></i> </button></a>
                              <a href="#edit<?php echo $ar->id; ?>" data-toggle="modal"><button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button></a>
                              <div id="edit<?php echo $ar->id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h4 class="modal-title">Edit User</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">

                                        <div class="col-md-12">
                                          <div class="widget-content">
                                            <div class="padd">

                                              <br />
                                              <!-- Form starts.  -->
                                              <form class="form-horizontal" role="form" action="<?php echo site_url("berita/update"); ?>" method="post">

                                                <div class="form-group">
                                                  <label class="col-lg-2 control-label">ID</label>
                                                  <div class="col-lg-5">
                                                    <input type="text" name="id" id="id" class="form-control" placeholder="<?php echo $ar->id; ?>" value="<?php echo $ar->id; ?>" readonly="readonly">
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <label class="col-lg-2 control-label">Judul</label>
                                                  <div class="col-lg-5">
                                                    <input type="text" name="judul" id="judul" class="form-control" placeholder="<?php echo $ar->judul; ?>" value="<?php echo $ar->judul; ?>">
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <label class="col-lg-2 control-label">Kategori</label>
                                                  <div class="col-lg-5">
                                                    <input type="text" name="kategori" id="kategori" class="form-control" placeholder="<?php echo $ar->kategori; ?>" value="<?php echo $ar->kategori; ?>">
                                                  </div>
                                                </div>

                                                <div class="text-area">
                                                  <!-- Add the "cleditor" to textarea to add CLeditor -->
                                                  <textarea class="cleditor" name="isi"><?php echo $ar->isi ?></textarea>

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
                              <a href="<?php echo site_url("berita/hapus/$ar->id"); ?>"><button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus"><i class="fa fa-times"></i> </button></a>
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
