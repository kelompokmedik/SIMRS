  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asset & Inventori
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Kategori</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <?php foreach ($tb_kategori as $l) { ?>
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_assetori/update_kategori') ?>" method="post">
              <div class="box-body">     
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode Kategori</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_kategori" value="<?php echo $l->id_kategori ?>">
                    <input type="text" class="form-control" placeholder="Kode Kategori" name="kd_kategori" value="<?php echo $l->kd_kategori ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Kategori" name="nm_kategori" value="<?php echo $l->nm_kategori ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="deskripsi"><?php echo $l->deskripsi ?></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Admin/c_assetori/data_kategori"?>">Batal</a>
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

 