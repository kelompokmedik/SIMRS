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
          <h3 class="box-title">Detail Data pasien</h3>
        </div>

        <?php foreach ($tb_regpasien as $l) { ?>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/Admin/c_registrasi/update_datapasien') ?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Rekamedis</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_reg" value="<?php echo $l->id_reg ?>">
                    <label class="control-label">: <?php echo $l->no_rekmedis?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pasien</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->nm_pasien?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->jk ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Golongan Dara</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->gol_darah ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->tmpt_lahir ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->tgl_lahir ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->nm_ibu ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->alamat ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->agama ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Hp</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->no_hp ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->pekerjaan ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status Menikah</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->stts_menikah ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->created ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Modified</label>
                  <div class="col-sm-10">
                    <label class="control-label">: <?php echo $l->modified ?></label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                <div class="col-sm-12"> 
                  <!-- <button type="submit" class="btn btn-danger">Batal</button> -->
                  <a type="button" class="btn btn-info" href="<?php echo base_url()."Admin/c_registrasi/datapasien" ?>"><i class="fa fa-fw fa-mail-reply-all"></i> Keluar</a>
                 <!--  <button type="submit" class="btn btn-primary">Simpan</button> -->
                </div>
                </div>
              </div>
            </form>
          </div>
        <?php }?>
      </div>
    </section>
  </div>


 