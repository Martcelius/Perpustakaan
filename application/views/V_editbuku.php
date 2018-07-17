<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Learning Center</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>res/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>res/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>res/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>res/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">

      <?php $this->load->view('V_header'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php $this->load->view('V_sidebar'); ?>

      <!-- Content Wrapper. Contains page content -->
     
      <!-- <?php //$this->load->view('V_footer'); ?> -->

      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>EDIT DATA BUKU</h2>   
                        <h5>FORM</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                <!-- general form elements -->
                    <div class="box box-primary">
                  <!-- form start -->
                   <br>
                   <br>
                  <form method="post" role="form" action="<?php echo base_url().'C_transaksi/Update_buku' ?>">
                    <div class="box-body">
                      <!-- <div class="form-group">
                        <label>ID Peminjaman</label>
                        <input type="text" class="form-control" id="id_peminjaman" placeholder="ID Peminjaman">
                      </div> -->   
                        <div class="form-group">
                        <label>ID Buku</label>
                        <input type="text" class="form-control" name="id_buku" value="<?php echo $databuku->ID_buku ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name="judul" value="<?php echo $databuku->Judul ?>"   >
                      </div>
                      <div class="form-group">
                        <label>Penerbit Buku</label>
                        <input type="text" class="form-control" name="penerbit" value="<?php echo $databuku->Penerbit ?>"   >
                      </div>
                      <div class="form-group">
                        <label>Tahun Realese</label>
                        <input type="text" class="form-control" name="tahun" value="<?php echo $databuku->Tahun ?>" >
                      </div>
                      <div class="form-group">
                        <label>Pengarang Buku</label>
                        <input type="text" class="form-control" name="pengarang" value="<?php echo $databuku->Pengarang ?>"  >
                      </div>
                      <div class="form-group">
                        <label>Stok Buku</label>
                        <input type="text" class="form-control" name="stok" value="<?php echo $databuku->Stok ?>"    >
                      </div>
                      <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tanggal_masuk" placeholder="Tanggal Masuk" value="<?php echo $databuku->Tanggal_masuk ?>"  required  >
                      </div>
                         <input type="submit" name="submit"  value="Submit">
                         <input type="submit" name="cancel"  value="Cancel">    
                      </div>
                      
                      <!-- /.box-body -->

                    <!-- <div class="box-footer"> -->

                    <!-- <label class="col-sm-6"></label>  -->
                    
                    <!-- </div> -->
                  </form>
                </div><!-- /.box -->
                </div>
            </div>   <!-- /.row -->
        </section><!-- /.content -->
                 <!-- /. ROW  -->           
                 </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>res/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>res/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>res/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>res/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>res/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>res/assets/js/custom.js"></script>
    
   
</body>
</html>

