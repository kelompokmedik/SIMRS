  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Registrasi</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('frontoffice/c_registrasi/aksi_inputdata') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Rekamedis</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_rekmedis" class="form-control" placeholder="No. Rekamedis" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Pasien" name="nm_pasien">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jk">
                      <option value=""></option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Golongan Dara</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="gol_darah">
                      <option>A</option>
                      <option>B</option>
                      <option>AB</option>
                      <option>O</option>
                    </select>
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
                    <input type="date" class="form-control" placeholder="-TT-BB-HH-" name="tgl_lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Ibu" name="nm_ibu">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="agama">
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Katolik</option>
                      <option>Hindu</option>
                      <option>Buddha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Hp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="No. Hp" name="no_hp">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pekerjaan">
                      <option>PNS</option>
                      <option>Pegawai Swasta</option>
                      <option>Petani</option>
                      <option>Nelayan</option>
                      <option>Peternak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Menikah</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="stts_menikah">
                      <option>Kawin</option>
                      <option>Belum Kawin</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">jaminan Pasien</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jaminan_pasien">
                      <option>BPJS</option>
                      <option>Umum</option>
                      <option>Jamkesmas</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-default" href="<?php echo base_url()."frontoffice/c_beranda/"?>">Kembali</a>
                    <button type="submit" class="btn btn-warning">Batal</button>
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

 