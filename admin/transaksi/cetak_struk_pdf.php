            
            <?php
             require_once __DIR__ . '/vendor/autoload.php';
             $mpdf = new \Mpdf\Mpdf();
         
             //koneksi ke database mysql,
             $koneksi = mysqli_connect("localhost","root","","db_halalmart");
         
             //cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
             if (mysqli_connect_errno()){
                 echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
             }

             ob_start();
            ?>
            <?php
              $profil = mysqli_query($koneksi, "SELECT * FROM profil_toko") or die (mysqli_error($koneksi));
              while($profiltoko = mysqli_fetch_array($profil)){
                  $namatoko = $profiltoko['nama_toko'];
                  $alamattoko = $profiltoko['alamat'];
                  $nohp = $profiltoko['no_hp'];
                  $email = $profiltoko['email'];

              }
            ?>
				
			
						
            <div style="width: 350px;">
              <div style="border: 1px solid; padding: 5px;">
					<div style="text-align: center;">
                    <b style="font-size: 16px;"><?php echo $namatoko; ?></b><br>
                    <b style="font-size: 14px;"><?php echo $alamattoko; ?></b><br>
                    <div style="font-size: 12px; ">
                    Email : <?php echo $email; ?><br>
                    No.HP : <?php echo $nohp; ?>
                    </div><br>
				</div>
                  <?php
                    if (isset($_GET['no'])){
                      $notr = $_GET['no'];
                      $tr = mysqli_query($koneksi, "SELECT * FROM detail_transaksi INNER JOIN tb_transaksi ON detail_transaksi.no_transaksi = tb_transaksi.notransaksi INNER JOIN tb_barang ON detail_transaksi.idbarang = tb_barang.id_barang INNER JOIN tb_member ON tb_transaksi.pelanggan = tb_member.id_member INNER JOIN tb_user ON tb_transaksi.admin = tb_user.id_user WHERE no_transaksi = $notr");
                      while ($a = mysqli_fetch_array($tr)) {
                        $atgl = $a['tanggal_transaksi'];
                        $anotransaksi = $a['notransaksi'];
                        $amember = $a['nama_member'];
                        $aadmin = $a['nama'];
                        $aket = $a['keterangan'];
                        $apoin = $a['poinbonus'];
                        $poinsaatini = $a['poin'];
                      }
                      ?>
                      <table style="font-size: 12px; width: 100%;">
                          <tbody>
                              <tr>
                                <td>No : <?php echo $anotransaksi; ?></td>
                                <td style="text-align: right;">Tgl : <?php echo $atgl; ?></td>
                              </tr>
                              <tr>
                                  <td>
                                        Member : <?php if ($amember == "" || $amember == "zzzz") {
                                        echo '-';
                                        }else{ echo $amember;} ?>
                                  </td>
                                  <td style="text-align: right;">
                                        Admin : <?php echo $aadmin; ?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    Poin saat ini : <?php echo $poinsaatini; ?>
                                  </td>
                                  <td style="text-align: right;">
                                        <?php echo $aket; ?>
                                  </td>
                              </tr>
                              
                          </tbody>
                      </table>
                      <br>
                      <?php
                      
                    }
                    ?>
                    <div>
                    <table style="width: 100%; font-size: 14px;">                    
                      <tbody>

                  <?php
                      if (isset($_GET['no'])){
                        $notr = $_GET['no'];

                        $query = mysqli_query($koneksi, "SELECT * FROM detail_transaksi INNER JOIN tb_transaksi ON detail_transaksi.no_transaksi = tb_transaksi.notransaksi INNER JOIN tb_barang ON detail_transaksi.idbarang = tb_barang.id_barang INNER JOIN tb_member ON tb_transaksi.pelanggan = tb_member.id_member INNER JOIN tb_user ON tb_transaksi.admin = tb_user.id_user WHERE no_transaksi = $notr ORDER BY id ASC") or die(mysqli_error($koneksi));
                          if($query == false){
                          die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
                          }
                          while ($data = mysqli_fetch_array ($query)){
                            
                            $notransaksi = $data['notransaksi'];
                            $tanggal = $data['tanggal_transaksi'];
                            $idbarang = $data['idbarang'];
                            $barang = $data['nama_barang'];
                            $jumlah = $data['jumlah'];
                            $hargasatuanmember = $data['harga_member'];
                            $hargasatuannormal = $data['harga_normal'];
                            $poinbonus = $data['poinbonus'];
                            $hargaperbarang = $data['harga_total'];
                            $hargatotal = $data['hargatotal'];
                            $bayar = $data['bayar'];
                            $kembalian = $data['kembalian'];
                            $pelanggan = $data['pelanggan'];
                            $namapelanggan = $data['nama_member'];
                            $totalpoin = $data['poinbonus'];
                            $admin = $data['nama'];
                            $keterangan = $data['keterangan'];

                            
                            $hargaindo = number_format($hargaperbarang, 0, ',', '.');
                            $totalindo = number_format($hargatotal, 0, ',', '.');
                            $bayarindo = number_format($bayar, 0, ',', '.');
                            $kembalindo = number_format($kembalian, 0, ',', '.');

                            //var_dump($notransaksi, $tanggal, $idbarang, $barang, $jumlah, $hargasatuanmember, $hargasatuannormal, $poinbonus, $hargaperbarang, $hargatotal, $bayar, $kembalian, $pelanggan, $namapelanggan, $totalpoin, $admin, $keterangan);
                          
                      
                        
                      ?>
                  
                  
                        <tr style="word-wrap: break-word;">
                          <td style="width: 250px;"><?php echo $barang; ?></td>
                          <td style="width: 50px;">x<?php echo $jumlah; ?></td>
                          <td style="float: right; width: 100px; text-align: right;">Rp.<?php echo $hargaindo; ?></td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    } ?>
                    </table>
                    <hr width="100%" color="black" >
                    <div style="font-size: 12px;">
                        <div style="height: 60px;">
                            <table style="width: 100%; font-size: 12px;">
                                <tbody>
                                    <tr>
                                        <td >Bonus poin : <?php echo $poinbonus; ?></td>
                                        <td style="text-align: right;">Bayar : Rp.<?php echo $bayarindo; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total : Rp.<?php echo $totalindo; ?></td>
                                        <td style="text-align: right;">Kembali : Rp.<?php echo $kembalindo; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                      <div style="text-align: center; font-size: 12px;">
                        <span>Terimakasih Telah Berbelanja</span><br>
                        <span>Semoga Sehat Selalu</span>
                      </div>
                      
                    </div>
                    
                  </div>
              </div>
                <?php
                    $nama_dokumen = 'Struk '.$anotransaksi.' '.$tanggal.'';
                    $html = ob_get_contents();
                    ob_end_clean();
                    
                    $mpdf->WriteHTML(utf8_encode($html));
                    $mpdf->Output("".$nama_dokumen.".pdf" ,'D');
                ?>