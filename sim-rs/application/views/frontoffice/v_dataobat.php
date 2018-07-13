  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gudang Farmasi
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header">Daftar Data Obat
                <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."frontoffice/c_obat/tambah_obat"?>"><i class="fa fa-fw fa-plus"></i> Tambah Data Obat</a>
              </h3>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Obat</th>
                  <th>Satuan</th>
                  <th>Jenis</th>
                  <th>Harga Beli</th>
                  <th>PPN</th>
                  <th>Stok</th>
                  <th>Stok Minimal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_obat as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->nm_obat?></td>
                  <td><?php echo $l->satuan?></td>
                  <td><?php echo $l->jn_obat?></td>  
                  <td><?php echo $l->hrg_beli?></td> 
                  <td><?php echo $l->ppn?></td> 
                  <td><?php echo $l->stok_awal?></td> 
                  <td><?php echo $l->stok_minimal?></td>  
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."frontoffice/c_obat/edit_obat/".$l->id_obat ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."frontoffice/c_obat/hapus_obat/".$l->id_obat ?>"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              <div class="timeline-footer">
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->