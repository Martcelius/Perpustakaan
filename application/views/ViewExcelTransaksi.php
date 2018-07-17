 <?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=LaporanPeminjaman.xls");
header("Pragma: no-cache");
header("Expires: 0");
?> 
 <table  border='1' width="70%"   >
   <thead>
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>ID Petugas</th>
            <th>Nim</th>
            <th>Jumlah Buku</th>
            <th>ID_buku</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>  
              
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
            <td><?php echo $tampil->ID_transaksi ?></td>
            <td><?php echo $tampil->ID_petugas ?></td>
            <td><?php echo $tampil->Nim ?></td>
            <td><?php echo $tampil->Jumlah ?></td>
            <td><?php echo $tampil->ID_buku ?></td>
             <td><?php echo $tampil->Judul ?></td>
            <td><?php echo $tampil->Tanggal_pinjam ?></td>
            <td><?php echo $tampil->Tanggal_kembali ?></td>
            <td><?php echo $tampil->Status ?></td>
          </tr>
        <?php
        $i++;
        }
        ?>
        </table>