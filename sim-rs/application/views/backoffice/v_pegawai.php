  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kepegawaian
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header">Table Data Pegawai
                  <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Backoffice/c_pegawai/tambah_pegawai"?>"><i class="fa fa-fw fa-plus"></i> Tambah Data Pegawai</a>
              </h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pegawai</th>
                  <th>Jabatan</th>
                  <th>Pangkat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_pegawai as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->nm_pegawai?></td> 
                  <td><?php echo $l->jabatan?></td>
                  <td><?php echo $l->pangkat?></td>
                  <td>
                    <a type="button" title="Edit Data" href="<?php echo base_url()."Backoffice/c_pegawai/edit_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a type="button" title="Detail Data" href="<?php echo base_url()."Backoffice/c_pegawai/detail_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-folder-open"></i></a>
                    <a type="button" title="Hapus Data" href="<?php echo base_url()."Backoffice/c_pegawai/hapus_pegawai/".$l->id_pegawai ?>"><i class="glyphicon glyphicon-trash"></i></a>
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