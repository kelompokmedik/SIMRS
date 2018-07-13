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
          <h3 class="box-title">Tambah Data Pegawai</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_pegawai/aksi_inputpegawai') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_pegawai" class="form-control" placeholder="Nama" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nomor KTP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nomor KTP" name="no_ktp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pangkat</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pangkat">
                      <option value="">-Pilih Pangkat-</option>
                      <option value="A1">A1</option>
                      <option value="4B">4B</option>
                      <option value="4AS">4AS</option>
                      <option value="5BA">5BA</option>
                      <option value="3A">3A</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jabatan">
                      <option value="">-Pilih Jabatan-</option>
                      <?php
                        foreach ($tb_jabatan as $l) {
                        ?>
                        <option value="<?php echo $l->jabatan?>"><?php echo $l->jabatan?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telp</label>
                  <div class="col-sm-10">
                    <input type="text" name="telp" class="form-control" placeholder="Telp" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmpt_lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="-TT-BB-HH-" name="tgl_lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="agama">
                      <option value="">-Pilih Agama</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddha">Buddha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendidikan Terakhir</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pddkn_terakhir">
                      <option value="">-Pilih Pendidikan Terakhir-</option>
                      <option value="SMA/Sederajat">SMA/Sederajat</option>
                      <option value="D1">D1</option>
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
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
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 