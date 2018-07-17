<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'C_transaksi/dashboard' ?>">Learning Center</a> 
            </div>
<div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> TIME access : <?php echo date('Y-m-d') ?> 
     <a href="<?php echo base_url().'C_transaksi/logout' ?>" class="btn btn-danger" onclick=" return confirm ('Anda Yakin ingin keluar?')" >Logout</a>
</div>
</nav>   