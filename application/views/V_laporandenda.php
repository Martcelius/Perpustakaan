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
                     <h2>Laporan DATA DENDA</h2>   
                        <h5>TABLE</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                   <form method="post" role="form" action="<?php echo base_url().'C_transaksi/exporttoexceldenda' ?>">
                      Dari Tanggal:  
                      <input type="date" name="tanggal1">  
              
                      Sampai Tanggal : 
                      <input type="date" name="tanggal2"> 
                      <!-- <input type="submit" name="tampil" value="Tampilkan" >  -->
                       <input type="submit" name="cetak" value="Export To Excel" > 
                    </form> <br>
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Nim</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Denda</th>  
                        </tr>
                    </thead>
                    
                        <?php 
                        // $data['tempid']=$this->input->post('idpeminjaman');
                        //$tampung2=$tampung;
                        $nomor = 1;
                        $i=1;
                        ?>
                        <?php foreach ($tampung4 as $tampil ) {
                        ?>
                         <tr>
                            <td><?php echo $nomor++ ?></td>
                            <td><?php echo $tampil->Judul ?></td>
                            <td><?php echo $tampil->Nim ?></td>
                            <td><?php echo $tampil->Tanggal_pinjam ?></td>
                            <td><?php echo $tampil->Tanggal_kembali ?></td>
                            <td><?php echo $tampil->Denda ?></td>
                          </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </table>  
                    </div>
                    </div>
                    </div>
                     



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

