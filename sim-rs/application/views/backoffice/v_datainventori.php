  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Asset & Inventori
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header">Table Data Kategori
                  <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Backoffice/c_assetori/tambah_inventori"?>"><i class="fa fa-fw fa-plus"></i> Tambah Data inventori</a>
              </h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Inventori</th>
                  <th>Nama Barang</th>
                  <th>Catatan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_inventori as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->kd_inventori?></td> 
                  <td><?php echo $l->nm_barang?></td>
                  <td><?php echo $l->catatan?></td>
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."Backoffice/c_assetori/edit_inventori/".$l->id_inventori ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."Backoffice/c_assetori/hapus_inventori/".$l->id_inventori ?>"><i class="glyphicon glyphicon-trash"></i></a>
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