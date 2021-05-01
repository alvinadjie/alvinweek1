

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="box-body">
                <a href="<?php echo base_url() ?>admin/tambah_user" class="btn btn-success">Tambah User</a>
              <table id="example1" class="table table-bordered table-striped table-hoverx">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>Username</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php $no=1; foreach ($users as $rec) {
                    
                   ?>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rec['nama']; ?></td>
                  <td><?php echo $rec['jenis_kelamin']; ?></td>
                  <td><?php echo $rec['username']; ?></td>
                  
                  <td>
                    <a href="<?php echo base_url() ?>admin/delete_user/<?php echo $rec['id']; ?>" data-toggle="tooltip" title="Hapus!" class="btn btn-danger" onclick="if (confirm('Apakah Anda Yakin?')) commentDelete(1); return false">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo base_url() ?>admin/edit_user/<?php echo $rec['id']; ?>" data-toggle="tooltip" title="Edit" class="btn btn-info">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a></td>
                </tr>
                <?php $no++; } ?>
                </tbody>
               
              </table>
            </div>
            
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
  <script>
$(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>