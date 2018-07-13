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
              <h3 class="page-header">Table Data Merk
                  <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Admin/c_assetori/tambah_merk"?>"><i class="fa fa-fw fa-plus"></i> Tambah Data Merk</a>
              </h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Merk</th>
                  <th>Nama Merk</th>
                  <th>Catatan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_merk as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->kd_merk?></td> 
                  <td><?php echo $l->nm_merk?></td>
                  <td><?php echo $l->catatan?></td>
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."Admin/c_assetori/edit_merk/".$l->id_merk ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."Admin/c_assetori/hapus_merk/".$l->id_merk ?>"><i class="glyphicon glyphicon-trash"></i></a>
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