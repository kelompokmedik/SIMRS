<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data User</h3>
        </div>
        <?php foreach ($tb_akun as $l) { ?>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_admin/update_user') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_akun" value="<?php echo $l->id_akun ?>">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $l->username?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo $l->password?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hak Akses</label>
                  <div class="col-sm-10">
                    
                    <select class="form-control" name="hak_akses">
                      <option value="">-Pilih-</option>
                      <option value="admin" <?php $l->hak_akses == 'admin' ? print "selected" : "" ?>>admin</option>
                      <option value="dokter" <?php $l->hak_akses == 'dokter' ? print "selected" : "" ?>>dokter</option>
                      <option value="front office" <?php $l->hak_akses == 'front office' ? print "selected" : "" ?>>front office</option>
                      <option value="back office" <?php $l->hak_akses == 'back office' ? print "selected" : "" ?>>back office</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Admin/c_admin/data_user"?>">Batal</a>
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

 