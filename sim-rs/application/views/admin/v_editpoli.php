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
          <h3 class="box-title">Edit Data poli</h3>
        </div>
        <?php foreach ($tb_poli as $l) { ?>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_masterdata/update_poli') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">poli</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_poli" value="<?php echo $l->id_poli ?>">
                    <input type="text" name="poli" class="form-control" placeholder="Poli" value="<?php echo $l->poli?>">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Admin/c_masterdata/data_poli"?>">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        <?php }?>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 