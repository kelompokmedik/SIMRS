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
          <h3 class="box-title">Edit Data Pegawai</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <?php foreach ($tb_pegawai as $l) { ?>
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_pegawai/update_pegawai') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_pegawai" value="<?php echo $l->id_pegawai ?>">
                    <input type="text" name="nm_pegawai" class="form-control" placeholder="Nama" value="<?php echo $l->nm_pegawai ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor KTP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nomor KTP" name="no_ktp" value="<?php echo $l->no_ktp ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pangkat</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pangkat">
                      <option value="">-Pilih Pangkat-</option>
                      <option value="A1" <?php $l->pangkat == 'A1' ? print "selected" : "" ?>>A1</option>
                      <option value="4B" <?php $l->pangkat == '4B' ? print "selected" : "" ?>>4B</option>
                      <option value="4AS" <?php $l->pangkat == '4AS' ? print "selected" : "" ?>>4AS</option>
                      <option value="5BA" <?php $l->pangkat == '5BA' ? print "selected" : "" ?>>5BA</option>
                      <option value="3A" <?php $l->pangkat == '3A' ? print "selected" : "" ?>>3A</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jabatan">
                      <option value="">-Pilih Jabatan-</option>
                      <?php
                        foreach ($tb_jabatan as $e) {
                        ?>
                        <option <?php if($l->jabatan == $e->jabatan) {echo "selected"; } ?> value="<?php echo $e->jabatan?>"><?php echo $e->jabatan?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="alamat"><?php echo $l->alamat?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp</label>
                  <div class="col-sm-10">
                    <input type="text" name="telp" class="form-control" placeholder="Telp" value="<?php echo $l->telp?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmpt_lahir" value="<?php echo $l->tmpt_lahir?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="-TT-BB-HH-" name="tgl_lahir" value="<?php echo $l->tgl_lahir?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="agama">
                      <option value="">-Pilih Agama</option>
                      <option value="Islam" <?php $l->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                      <option value="Kristen" <?php $l->agama == 'Kristen' ? print "selected" : "" ?>>Kristen</option>
                      <option value="Katolik" <?php $l->agama == 'Katolik' ? print "selected" : "" ?>>Katolik</option>
                      <option value="Hindu" <?php $l->agama == 'Hindu' ? print "selected" : "" ?>>Hindu</option>
                      <option value="Buddha" <?php $l->agama == 'Buddha' ? print "selected" : "" ?>>Buddha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pddkn_terakhir">
                      <option value="">-Pilih Pendidikan Terakhir-</option>
                      <option value="SMA/Sederajat" <?php $l->pddkn_terakhir == 'SMA/Sederajat' ? print "selected" : "" ?>>SMA/Sederajat</option>
                      <option value="D1" <?php $l->pddkn_terakhir == 'D1' ? print "selected" : "" ?>>D1</option>
                      <option value="D3" <?php $l->pddkn_terakhir == 'D3' ? print "selected" : "" ?>>D3</option>
                      <option value="S1" <?php $l->pddkn_terakhir == 'S1' ? print "selected" : "" ?>>S1</option>
                      <option value="S2" <?php $l->pddkn_terakhir == 'S2' ? print "selected" : "" ?>>S2</option>
                      <option value="S3" <?php $l->pddkn_terakhir == 'S3' ? print "selected" : "" ?>>S3</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Admin/c_pegawai/data_pegawai"?>">Batal</a>
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

 