  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kepegawaian
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pensiun</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('backend/c_pensiun/aksi_inputpensiun') ?>" method="post">
              <div class="box-body">     
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="nm_pegawai">
                      <option value=""></option>
                      <?php
                        foreach ($tb_pegawai as $l) {
                        ?>
                        <option value="<?php echo $l->nm_pegawai?>"><?php echo $l->nm_pegawai?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pensiun</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="-TT-BB-HH-" name="tgl_pensiun" style="cursor: default;">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Catatan</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="catatan"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."backend/c_pensiun/data_pensiun"?>">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 