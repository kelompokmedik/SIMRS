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
              <h3 class="box-title">Data Ruang Perawatan</h3>
                <div class="" align="right">
                  <div class="col-sm-12"> 
                    <a type="button" class="btn btn-primary" href="<?php echo base_url()."backend/c_masterdata/tambah_rawat"?>"><i class="fa fa-fw fa-plus"></i> Tambah</a>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Ruang Perawatan</th>
                  <th>Created</th>
                  <th>Modified</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php
                foreach ($tb_rawat as $l){
                ?>
                <tr>
                  <th><?php echo $no++?></th>
                  <td><?php echo $l->rawat?></td> 
                  <td><?php echo $l->created?></td>
                  <td><?php echo $l->modified?></td>
                  <td>
                    <button type="button" class="btn btn-default"><a href="<?php echo base_url()."backend/c_masterdata/edit_rawat/".$l->id_rawat ?>"><i class="fa fa-pencil"></i></a></button>
                    <button type="button" class="btn btn-warning"><a href="<?php echo base_url()."backend/c_masterdata/hapus_rawat/".$l->id_rawat ?>"><i class="fa fa-trash-o"></i></a></button>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
