<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Cari Buku</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url() ?>res/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url() ?>res/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url() ?>res/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
  <a href="<?php echo base_url().'C_transaksi/cari_buku' ?>" class="btn btn-danger ">Cari Buku</a>
  <a href="<?php echo base_url().'C_transaksi/tampil_login' ?>" class="btn btn-danger ">Login</a>
  </div>
  <a class="navbar-brand" href="<?php echo base_url().'C_transaksi/index' ?>">Dashboard</a> 
        </nav>   
           <!-- /. NAV TOP  -->
               
        <!-- /. NAV SIDE  -->
       
            <div id="page-inner">
               <div align="center" class="col-md-12">
                     <h2>Data Buku Perpustakaan Telkom University</h2>   
                     <br><br>
                </div>

                
                  <form method="post" role="form" action="<?php echo base_url().'C_transaksi/caribuku' ?>">
                       <label> Cari Data Buku</label>
                        <input type="text" name="databuku" placeholder="Data Buku" required> 
                        <input class="button" type="submit" name="cekdatabuku" value="Submit"> 
                    </form> 
               
                    <br>
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
                              <th>Penerbit Buku</th>
                              <th>Tahun Terbit</th>
                              <th>Pengarang buku</th>
                              <th>Jumlah buku</th>   
                          </tr>
                      </thead>
                      
                          <?php 
                          $nomor = 1;
                          $i=1;
                          ?>
                          <?php foreach ($tampung3 as $tampil ) {
                          ?>
                           <tr>
                              <td><?php echo $nomor++ ?></td>
                              <td><?php echo $tampil->Judul ?></td>
                              <td><?php echo $tampil->Penerbit ?></td>
                              <td><?php echo $tampil->Tahun ?></td>
                              <td><?php echo $tampil->Pengarang ?></td>
                              <td><?php echo $tampil->Stok ?></td>
                             
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
           
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url() ?>res/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url() ?>res/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url() ?>res/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() ?>res/assets/js/custom.js"></script>
    
   
</body>
</html>

