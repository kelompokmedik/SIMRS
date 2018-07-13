 <div class="content-wrapper">
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
          <h3 class="box-title">Edit Data pasien</h3>
        </div>

        <?php foreach ($tb_regpasien as $l) { ?>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_registrasi/update_datapasien') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Rekamedis</label>
                  <div class="col-sm-10">
                     <input type="hidden" name="id_reg" value="<?php echo $l->id_reg ?>">
                    <input type="text" class="form-control" placeholder="No. Rekamedis" name="no_rekmedis" value="<?php echo $l->no_rekmedis?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Pasien" name="nm_pasien" value="<?php echo $l->nm_pasien?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jk">
                      <option value="Laki-Laki" <?php $l->jk == 'Laki-Laki' ? print "selected" : "" ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php $l->jk == 'Perempuan' ? print "selected" : "" ?>>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Golongan Dara</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="gol_darah">
                      <option value="A" <?php $l->gol_darah == 'A' ? print "selected" : "" ?>>A</option>
                      <option value="B" <?php $l->gol_darah == 'B' ? print "selected" : "" ?>>B</option>
                      <option value="AB" <?php $l->gol_darah == 'AB' ? print "selected" : "" ?>>AB</option>
                      <option value="O" <?php $l->gol_darah == 'O' ? print "selected" : "" ?>>O</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmpt_lahir" value="<?php echo $l->tmpt_lahir ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $l->tgl_lahir?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Nama Ibu" name="nm_ibu" value="<?php echo $l->nm_ibu ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"><?php echo $l->alamat ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="agama">
                      <option value="Islam" <?php $l->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                      <option value="Kristen" <?php $l->agama == 'Kristen' ? print "selected" : "" ?>>Kristen</option>
                      <option value="Katolik" <?php $l->agama == 'Katolik' ? print "selected" : "" ?>>Katolik</option>
                      <option value="Hindu" <?php $l->agama == 'Hindu' ? print "selected" : "" ?>>Hindu</option>
                      <option value="Buddha" <?php $l->agama == 'Buddha' ? print "selected" : "" ?>>Buddha</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Hp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="No. Hp" name="no_hp" value="<?php echo $l->no_hp ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pekerjaan">
                      <option value="PNS" <?php $l->pekerjaan == 'PNS' ? print "selected" : "" ?>>PNS</option>
                      <option value="Pegawai Swasta" <?php $l->pekerjaan == 'Pegawai Swasta' ? print "selected" : "" ?>>Pegawai Swasta</option>
                      <option value="Petani" <?php $l->pekerjaan == 'Petani' ? print "selected" : "" ?>>Petani</option>
                      <option value="Nelayan" <?php $l->pekerjaan == 'Nelayan' ? print "selected" : "" ?>>Nelayan</option>
                      <option value="Peternak" <?php $l->pekerjaan == 'Peternak' ? print "selected" : "" ?>>Peternak</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Menikah</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="stts_menikah">
                      <option value="Kawin" <?php $l->stts_menikah == 'Kawin' ? print "selected" : "" ?>>Kawin</option>
                      <option value="Belum Kawin" <?php $l->stts_menikah == 'Belum Kawin' ? print "selected" : "" ?>>Belum Kawin</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">jaminan Pasien</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jaminan_pasien">
                      <option value="BPJS" <?php $l->jaminan_pasien == 'BPJS' ? print "selected" : "" ?>>BPJS</option>
                      <option value="Umum" <?php $l->jaminan_pasien == 'Umum' ? print "selected" : "" ?>>Umum</option>
                      <option value="Jamkesmas" <?php $l->jaminan_pasien == 'Jamkesmas' ? print "selected" : "" ?>>Jamkesmas</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-default" href="<?php echo base_url()."Admin/c_registrasi/datapasien/"?>">Kembali</a>
                    <button type="reset" class="btn btn-warning">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
            <?php }?>
        </div>
      </div>
    </section>
  </div>


 