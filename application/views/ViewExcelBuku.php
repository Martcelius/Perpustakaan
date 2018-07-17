 <?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=LaporanDataBuku.xls");
header("Pragma: no-cache");
header("Expires: 0");
?> 
 <table  border='1' width="70%"   >
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
                          </tr>
                      </thead>
                      
                          <?php 
                          $nomor = 1;
                          $i=1;
                          ?>
                          <?php foreach ($tampung5 as $tampil ) {
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
                            
                          <?php
                          $i++;
                          }
                          ?>
        </table>