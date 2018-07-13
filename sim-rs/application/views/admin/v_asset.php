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
              <h3 class="page-header">Daftar Penanggung Jawab Asset
                  <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Admin/c_assetori/tambah_asset"?>"><i class="fa fa-fw fa-plus"></i> Tambah Penanggung Jawab Asset</a>
              </h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Pemilik</th>
                  <th>Nama Pemilik</th>
                  <th>Catatan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_asset as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->kd_pemilik?></td> 
                  <td><?php echo $l->nm_pemilik?></td>
                  <td><?php echo $l->catatan?></td>
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."Admin/c_assetori/edit_asset/".$l->id_asset ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."Admin/c_assetori/hapus_asset/".$l->id_asset ?>"><i class="glyphicon glyphicon-trash"></i></a>
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