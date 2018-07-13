  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekam Medis
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header">Table Data Rekam Medis 
               <!--  <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Dokter/c_rekmedis/detail_rekmedis"?>"><i class="fa fa-fw fa-plus"></i> Detail</a> -->
              </h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>No BPJS</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- <?php $no = 1; ?>
                <?php
                foreach ($tb_pegawai as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->nm_pegawai?></td> 
                  <td><?php echo $l->jabatan?></td>
                  <td><?php echo $l->pangkat?></td>
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."backend/c_pegawai/edit_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Detail Data" href="<?php echo base_url()."backend/c_pegawai/detail_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-folder-open"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."backend/c_pegawai/hapus_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>
                <?php } ?> -->
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