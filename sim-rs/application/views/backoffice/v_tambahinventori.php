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
          <h3 class="box-title">Tambah Data inventori</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Backoffice/c_assetori/aksi_inputinventori') ?>" method="post">
              <div class="box-body">     
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kode inventori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Kode inventori" name="kd_inventori" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Barang" name="nm_barang" >
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
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Backoffice/c_assetori/data_inventori"?>">Batal</a>
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

 