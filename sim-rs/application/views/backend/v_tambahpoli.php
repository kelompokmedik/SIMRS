<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Poli</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('backend/c_masterdata/input_poli') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Poli</label>
                  <div class="col-sm-10">
                    <input type="text" name="poli" class="form-control" placeholder="Poli" >
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."backend/c_masterdata/data_poli"?>">Batal</a>
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

 