
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

      
        <div class="callout callout-info">
          <h4>Halo, <?php echo $this->session->userdata('real_name'); ?></h4>

          <p>Selamat Datang di Sistem E-PKL SMK Bisma</p>
        </div>

<style>
.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.text{
    margin:20px 0px;
}

</style>
        
        <a href="<?php echo base_url() ?>admin/data_pkl/<?php echo $this->session->userdata('user_id') ?>" style="color:white;" >
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                
                <div class="box-part text-center" style="background-color:#3498db">
                    
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                    
                    <div class="title">
                        <h3 style="font-weight:bold">Data Siswa</h3>
                    </div>
                    
                    <div class="text">
                        <h4>Informasi Data Pribadi Siswa</h4>
                    </div>
                    
                    <!-- <a href="#">Learn More</a> -->
                    
                    </div>
            </div>
        </a>

            <a href="<?php echo base_url() ?>admin/jurnal/<?php echo $this->session->userdata('user_id') ?>" style="color:white;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                    <div class="box-part text-center" style="background-color:#1abc9c">
                        
                        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                        
                        <div class="title">
                            <h3 style="font-weight:bold">Jurnal Harian</h3>
                        </div>
                        
                        <div class="text">
                            <h4>Data Jurnal Harian Siswa</h4>
                        </div>
                        
                        
                        </div>
                </div>	
           </a>	 
        
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
 