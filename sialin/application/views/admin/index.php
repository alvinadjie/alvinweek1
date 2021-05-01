
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

       
        <div class="col-lg-6 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php 
                    // echo $lukisan[0]['jumlah'];
                    echo $guru[0]['jumlah'];; 
                ?>
              </h3>
        
              <p style="font-weight:bold">Jumlah Guru</p>
            </div>
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <a href="<?php echo base_url() ?>admin/guru" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
              <h3>
              <?php 
                echo $siswa[0]['jumlah'];
               ?>
              </h3>
        
              <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>

            </div>
            <a href="<?php echo base_url() ?>admin/siswa" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-blue">
            <div class="inner">
              <h3>
              <?php 
                echo $tempat_pkl[0]['jumlah'];
               ?>
              </h3>
        
              <p>Jumlah Tempat PKL</p>
            </div>
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>

            </div>
            <a href="<?php echo base_url() ?>admin/siswa" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
              <?php 
                echo $kelas[0]['jumlah'];
               ?>
              </h3>
        
              <p>Jumlah Kelas</p>
            </div>
            <div class="icon">
              <i class="fa fa-user" aria-hidden="true"></i>

            </div>
            <a href="<?php echo base_url() ?>admin/siswa" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
       
        
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 