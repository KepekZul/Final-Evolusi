
  <section id="tambah_user">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Registrasi</h2>
        <!-- Matter -->
        <div class="matter">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <?php if($this->session->flashdata('fail')): ?>
                <div class="col-md-12"><div class="alert alert-danger"><?php echo $this->session->flashdata('fail'); ?></div></div>
                <?php endif; ?>

              <?php if($this->session->flashdata('success')): ?>
                <div class="col-md-12"><div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div></div>
                <?php endif; ?>

                <div class="widget">
                  <div class="widget-head">
                      <div class="widget-icons pull-right">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget-content">
                      <div class="padd">
                          <form class="form-horizontal" role="form" action="<?php echo site_url("register"); ?>" method="post">
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Email</label>
                              <div class="col-lg-5">
                                <input placeholder="Email" type="text" name="email" id="Email" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Password</label>
                              <div class="col-lg-5">
                                <input placeholder="Password" type="password" name="pass" id="pass" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Verifikasi Password</label>
                              <div class="col-lg-5">
                                <input placeholder="Verifikasi Password" type="password" name="vpass" id="vpass" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Nama</label>
                              <div class="col-lg-5">
                                <input placeholder="Nama" type="text" name="nama" id="nama" class="form-control" required>
                              </div>
                            </div>

                             <div class="form-group">
                              <label class="col-lg-2 control-label">NRP</label>
                              <div class="col-lg-5">
                                <input type="text" name="nrp" id="Email" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Jurusan</label>
                              <div class="col-lg-5">
                                <input placeholder="Contoh : Informatika, Teknik Kimia" type="text" name="jurusan" id="Email" class="form-control" required>
                              </div>
                            </div>

                             <div class="form-group">
                              <label class="col-lg-2 control-label">Fakultas</label>
                              <div class="col-lg-5">
                                <input placeholder="Contoh : FTIF, FTSP" type="text" name="fakultas" id="Email" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Angkatan</label>
                              <div class="col-lg-5">
                                <input placeholder="Angkatan" type="text" name="angkatan" id="Email" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">Alamat</label>
                              <div class="col-lg-5">
                                <input placeholder="Alamat Surabaya" type="text" name="alamat" id="alamat" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-lg-2 control-label">HP</label>
                              <div class="col-lg-5">
                                <input placeholder="Nomor HP" type="text" name="hp" id="HP" class="form-control" required>
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
          <!-- about us slider -->

        </div><!--/.container-->
      </section><!--/about-us-->
