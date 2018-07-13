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
          <h3 class="box-title">Edit Data Pensiun</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <?php foreach ($tb_pensiun as $l) { ?>
            <form class="form-horizontal" action="<?php echo base_url('backend/c_pensiun/update_pensiun') ?>" method="post">
              <div class="box-body">     
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pegawai</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_pensiun" value="<?php echo $l->id_pensiun ?>">
                    <select class="form-control" name="nm_pegawai">
                      <option value=""></option>
                      <?php
                        foreach ($tb_pegawai as $e) {
                        ?>
                        <option <?php if($l->nm_pegawai == $e->nm_pegawai) {echo "selected"; } ?> value="<?php echo $e->nm_pegawai?>"><?php echo $e->nm_pegawai?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Pensiun</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" placeholder="-TT-BB-HH-" name="tgl_pensiun" value="<?php echo $l->tgl_pensiun ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Catatan</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="catatan"><?php echo $l->catatan?></textarea>
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
          <?php }?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 