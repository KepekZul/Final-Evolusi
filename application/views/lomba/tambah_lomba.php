<!-- Main bar -->
<div class="mainbar">

  <!-- Page heading -->
  <div class="page-head">
    <h2 class="pull-left"><i class="fa fa-home"></i> Tambah Lomba</h2>

    <!-- Breadcrumb -->
    <div class="bread-crumb pull-right">
      <a href="javascript:void(0)" onclick="location.href='#';"><i class="fa fa-home"></i>Lomba</a>
      <!-- Divider -->
      <span class="divider">/</span>
      <a href="javascript:void(0)" onclick="location.href='#';" class="bread-current">Tambah Lomba</a>
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
              <div class="pull-left">Tambah Lomba</div>
              <div class="widget-icons pull-right">
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget-content">
              <div class="padd">

                <form action="<?php echo site_url("lomba/post"); ?>" method="post" role="form" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-1">
                        <label>Judul</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="judul" class="form-control col-lg-4" placeholder="Masukan Judul lomba">
                    </div>
                  </div>

                  <br />
                  <div class="row">
                    <div class="col-md-1">
                        <label>kategori</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="kategori" class="form-control col-lg-4" placeholder="Masukan Kategori">
                    </div>
                  </div>

                  
                 <br />
                  <div class="row">
                    <div class="col-md-1">
                        <label>Foto</label>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="foto" id="foto">
                    </div>
                  </div>

                  <br />
                  <div class="text-area">
                    <!-- Add the "cleditor" to textarea to add CLeditor -->
                    <textarea class="cleditor" name="isi"></textarea>
                  </div>

                  <input type="submit" name="submit" value="submit">
                  <div class="clearfix"></div>

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
