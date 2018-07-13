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
                <!-- <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Admin/c_rekmedis/detail_rekmedis"?>"><i class="fa fa-fw fa-plus"></i> Detail</a> -->
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
                  <th>Tempat Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_regpasien as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->no_rekmedis?></td> 
                  <td><?php echo $l->nm_pasien?></td>
                  <td><?php echo $l->jk?></td>
                  <td><?php echo $l->tmpt_lahir?> <?php echo $l->tgl_lahir?></td>
                  <td><?php echo $l->alamat?></td>
                  <td>
                    <a type="button" title="Detail Rekam Medis" href="<?php echo base_url()."backend/c_pegawai/hapus_/".$l->id_reg ?>"><i class="glyphicon glyphicon-new-window"></i></a>
                    <a type="button" title="Cetak Data Pasien" href="<?php echo base_url()."backend/c_pegawai/hapus_/".$l->id_reg ?>"><i class="glyphicon glyphicon-print"></i></a>
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