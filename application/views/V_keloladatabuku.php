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
                     <h2>KELOLA DATA BUKU</h2>   
                        <h5>TABLE</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <form method="post" role="form" action="<?php echo base_url().'C_transaksi/cek_kelola_buku' ?>">
                  <label> Cari Data Buku</label>
                        <input type="text" name="idBuku" placeholder="Data Buku..." required> 
                        <input class="button" type="submit" name="cekidbuku" value="Submit">  
                        </form>
                   <table  class="table table-bordered table-striped""   >
    <thead>
        <tr>
            <th>No</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit Buku</th>
            <th>Tahun Terbit</th>
            <th>Pengarang buku</th>
            <th>Jumlah buku</th>  
            <th>Tanggal Masuk</th>
            <th>Opsi</th>    
        </tr>
    </thead>
    
        <?php 
        // $data['tempid']=$this->input->post('idpeminjaman');
        //$tampung=$this->db->query(" SELECT * FROM buku ")->result();
        $nomor = 1;
        $i=1;
        ?>
        <?php foreach ($cekidp as $tampil ) {
        ?>
         <tr>
            <td><?php echo $nomor++ ?></td>
            <td><?php echo $tampil->ID_buku ?></td>
            <td><?php echo $tampil->Judul ?></td>
            <td><?php echo $tampil->Penerbit ?></td>
            <td><?php echo $tampil->Tahun ?></td>
            <td><?php echo $tampil->Pengarang ?></td>
            <td><?php echo $tampil->Stok ?></td>
            <td><?php echo $tampil->Tanggal_masuk ?></td>
          <td>
                                                            <center>
                                                                <a><button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#<?php echo $tampil->ID_buku; ?>"><span class="fa fa-trash"></span></button> </a>
                                                                <!-- <a><?php //echo anchor('/KaAreaAdmin/edit'.$lihat->IDKAR,'<button class="btn btn-xs btn-warning"><span class="fa fa-edit"></span></button>') ?></a> -->
                                                                <a href="<?php echo base_url().'C_transaksi/editbuku?ID_buku='.$tampil->ID_buku ?>"><button type="button" class="btn btn-xs btn-warning"><span class="fa fa-edit"></span></button></a>
                                                            </center>
                                                        </td>
        </tr> 
        <div class="modal fade" id="<?php echo $tampil->ID_buku; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <font size="4">Apakah anda yakin menghapus ID Buku <b><?php echo $tampil->ID_buku; ?> </b>?</font>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <a> <?php echo anchor('/C_transaksi/deletedatabuku/'.$tampil->ID_buku,'<button type="button" class="btn btn-danger">Delete</button>') ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
        <?php
        $i++;
        }
        ?>
        </table>
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

