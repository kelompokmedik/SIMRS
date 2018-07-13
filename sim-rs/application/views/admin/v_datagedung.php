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
              <h3 class="page-header">Data Gedung
                <a style="float:right;" type="button" class="btn btn-primary btn-sm" href="<?php echo base_url()."Admin/c_masterdata/tambah_gedung"?>"><i class="fa fa-fw fa-plus"></i> Tambah</a>
              </h3>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Gedung</th>
                  <th>Created</th>
                  <th>Modified</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_gedung as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->gedung?></td> 
                  <td><?php echo $l->created?></td>
                  <td><?php echo $l->modified?></td>
                  <td>
                    <button type="button" class="btn btn-default"><a href="<?php echo base_url()."Admin/c_masterdata/edit_gedung/".$l->id_gedung ?>"><i class="fa fa-pencil"></i></a></button>
                    <button type="button" class="btn btn-warning"><a href="<?php echo base_url()."Admin/c_masterdata/hapus_gedung/".$l->id_gedung ?>"><i class="fa fa-trash-o"></i></a></button>
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