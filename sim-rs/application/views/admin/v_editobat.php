 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Gudang Farmasi 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Obat</h3>
        </div>

        <?php foreach ($tb_obat as $l) { ?>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('Admin/c_obat/update_dataobat') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-10">
                     <input type="hidden" name="id_obat" value="<?php echo $l->id_obat ?>">
                    <input type="text" class="form-control" placeholder="No. Rekamedis" name="nm_obat" value="<?php echo $l->nm_obat?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Obat</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jn_obat">
                      <option value="">- pilih jenis obat -</option>
                      <option value="Generik" <?php $l->jn_obat == 'Generik' ? print "selected" : "" ?>>Generik</option>
                      <option value="Tablet" <?php $l->jn_obat == 'Tablet' ? print "selected" : "" ?>>Tablet</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="satuan" value="<?php echo $l->satuan?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Harga Beli</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="hrg_beli" value="<?php echo $l->hrg_beli?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">PPN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="ppn" value="<?php echo $l->ppn?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Expire</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="expire" value="<?php echo $l->expire?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok Awal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="stok_awal" value="<?php echo $l->stok_awal?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok Minimal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="stok_minimal" value="<?php echo $l->stok_minimal?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aturan Pakai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="aturan" value="<?php echo $l->aturan?>">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."Admin/c_obat/data_obat/"?>">Batal</a>
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


 