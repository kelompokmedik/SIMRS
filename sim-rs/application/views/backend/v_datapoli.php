  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Poli</h3>
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-primary" href="<?php echo base_url()."backend/c_masterdata/tambah_poli"?>"><i class="fa fa-fw fa-plus"></i> Tambah</a>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Poli</th>
                  <th>Created</th>
                  <th>Modified</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_poli as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->poli?></td> 
                  <td><?php echo $l->created?></td>
                  <td><?php echo $l->modified?></td>
                  <td>
                    <button type="button" class="btn btn-default"><a href="<?php echo base_url()."backend/c_masterdata/edit_poli/".$l->id_poli ?>"><i class="fa fa-pencil"></i></a></button>
                    <button type="button" class="btn btn-warning"><a href="<?php echo base_url()."backend/c_masterdata/hapus_poli/".$l->id_poli ?>"><i class="fa fa-trash-o"></i></a></button>
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