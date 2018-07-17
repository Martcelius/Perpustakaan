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
                     <h2>INPUT DATA PENGEMBALIAN</h2>   
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
                  <!-- <form method="post" role="form" action="<?php //echo base_url().'C_transaksi/cekpeminjaman' ?>">
                      <label> Cari ID Peminjaman</label>
                      <input type="text" name="idpeminjaman" placeholder="ID Peminjaman..." required> 
                      <input class="button" type="submit" name="cekidpeminjaman" value="Submit">   
                   </form> -->
                   <br>
                   <br>
                  <form method="post" role="form" action="<?php echo base_url().'C_transaksi/insert_pengembalian' ?>">
                    <div class="box-body">
                      <!-- <div class="form-group">
                        <label>ID Peminjaman</label>
                        <input type="text" class="form-control" id="id_peminjaman" placeholder="ID Peminjaman">
                      </div> -->
                       <label> Cari ID Peminjaman</label>
                      <input type="text" name="idpeminjaman" placeholder="ID Peminjaman..."  value="<?php echo $cekidpeminjaman ?>" required> 
                      <input class="button" type="submit" name="cekidpeminjaman" value="Submit">   
                      <div class="form-group">
                        <label>ID Petugas</label>
                        <input type="text" class="form-control" name="id_petugas" placeholder="ID Petugas" value="<?php echo $cek->ID_petugas ?>" readonly  >
                      </div>
                      <div class="form-group">
                        <label>NIM Mahasisawa</label>
                        <input type="text" class="form-control" name="nim"  placeholder="NIM Mahasiswa" value="<?php echo $cek->Nim ?> " readonly>
                      </div>
                      <div class="form-group">
                        <label>ID Buku</label>
                        <input type="text" class="form-control" name="id_buku"  placeholder="ID Buku"  value="<?php echo $cek->ID_buku?> " readonly>
                      </div>
                      <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" class="form-control" name="judul"  placeholder="Judul Buku"  value="<?php echo $cek->Judul?> " readonly>
                      </div>
                      <div class="form-group">
                        <label>Jumlah Buku</label>
                        <input type="text" class="form-control" name="jumlah"  placeholder="Jumlah" value="<?php echo $cek->Jumlah?> " readonly>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Peminjaman</label>
                        <input type="text" class="form-control" name="tanggal" value="<?php echo $cek->Tanggal_pinjam ?> "   readonly>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="text" class="form-control" name="tanggalpengembalian" value="<?php echo $tanggalpengembalian ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Denda</label>
                        <input type="text" class="form-control" name="denda" value="Rp.<?php echo $selisih?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" placeholder="status" >
                        <option>Dikembalikan</option>
                        </select>
                      </div>
                         <input type="submit" name="submit"  value="Submit">
                      </div><!-- /.box-body -->

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

