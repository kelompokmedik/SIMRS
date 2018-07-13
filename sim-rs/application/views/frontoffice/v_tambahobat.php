  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
          <h3 class="box-title">Tambah Data Obat</h3>
        </div>
        <div class="box-body">
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('frontoffice/c_obat/aksi_inputobat') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-10">
                    <input type="text" name="nm_obat" class="form-control" placeholder="" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Obat</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jn_obat">
                      <option value="">- pilih jenis obat -</option>
                      <option value="Generik">Generik</option>
                      <option value="Tablet">Tablet</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Satuan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="satuan">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Harga Beli</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="hrg_beli">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">PPN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="ppn">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Expire</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="expire">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok Awal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="stok_awal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok Minimal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="stok_minimal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Aturan Pakai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="aturan">
                  </div>
                </div>
                
              <!-- /.box-body -->
              <div class="timeline-footer">
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-danger" href="<?php echo base_url()."frontoffice/c_beranda/data_obat"?>">Batal</a>
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

 