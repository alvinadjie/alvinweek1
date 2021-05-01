

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <?php foreach($user as $rec){ ?>
            <div class="box-body">
               <form role="form" method="post" action="<?php echo base_url() ?>admin/edit_user_exec/<?php echo $rec['id'] ?>">
              
                    
                <div class="form-group">
                </div> 
            
                <div class="form-group">
                <label>Nama</label>
                    <input type="text" class="form-control" name="nama" id="name" value="<?php echo $rec['nama'] ?>" >
                </div> 
                <div class="form-group">
                  <label for="exampleInputEmail1">JK</label>
                  <select  class="form-control" id="exampleInputPassword1" name="jk" required>
                    <option value="">======JK======</option>
                    <option  value="P" <?php if($rec['jenis_kelamin'] == 'P') {echo 'selected';} ?>>Pria</option>
                    <option value="W" <?php if($rec['jenis_kelamin'] == 'W') {echo 'selected';} ?>>Wanita</option>
                  </select>
                </div> 

                <div class="form-group">
                <label>Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $rec['username'] ?>">
                </div> 


                
              </div>
              <!-- /.box-body -->
            <?php } ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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
