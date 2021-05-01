

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form role="form" method="post" action="<?php echo base_url() ?>admin/insert_user">
              
                    
                <div class="form-group">
                </div> 
            
                <div class="form-group">
                <label>Nama</label>
                    <input type="text" class="form-control" name="nama" id="name" >
                </div> 

                <div class="form-group">
                  <label for="exampleInputEmail1">JK</label>
                  <select  class="form-control" id="exampleInputPassword1" name="jk" required>
                    <option value="">======JK======</option>
                    <option value="P">Pria</option>
                    <option value="W">Wanita</option>
                  </select>
                </div> 

                <div class="form-group">
                <label>Username</label>
                    <input type="text" class="form-control" name="username" id="username" >
                </div> 

                <div class="form-group">
                <label>Password</label>
                    <input type="password" class="form-control" name="password" id="name" >
                </div> 

                
              </div>
              <!-- /.box-body -->

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
