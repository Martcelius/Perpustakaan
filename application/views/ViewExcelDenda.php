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
                        <?php foreach ($tampung6 as $tampil ) {
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