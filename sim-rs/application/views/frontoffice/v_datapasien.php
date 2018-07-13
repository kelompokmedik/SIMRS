  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrasi Pasien
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. Rekamedis</th>
                  <th>Nama Pasien</th>
                  <th>Jenis Kelamin</th>
                  <th>NO. Hp</th>
                  <th>Created</th>
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
                  <td><?php echo $l->no_hp?></td>
                  <td><?php echo $l->created?></td>
                  <td>
                    <button type="button" class="btn btn-default"><a href="<?php echo base_url()."frontoffice/c_registrasi/editdatapasien/".$l->id_reg ?>"><i class="fa fa-pencil"></i></a></button>
                    <button type="button" class="btn btn-info"><a href="<?php echo base_url()."frontoffice/c_registrasi/view_detail/".$l->id_reg ?>"><i class="fa fa-file-o"></i></a></button>
                    <button type="button" class="btn btn-warning"><a href="<?php echo base_url()."frontoffice/c_registrasi/hapus_data/".$l->id_reg ?>"><i class="fa fa-trash-o"></i></a></button>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
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