<?php
//memasukkan file config.php
include('config.php');
?>

<main id="main" class="main">

			<div class="pagetitle">
			<h1>Struk Penjualan</h1>
			<nav>
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item">Struk Penjualan</li>
				</ol>
			</nav>
			</div><!-- End Page Title -->

			<section class="section">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
            <?php
              $profil = mysqli_query($koneksi, "SELECT * FROM profil_toko") or die (mysqli_error($koneksi));
              while($profiltoko = mysqli_fetch_array($profil)){
                  $namatoko = $profiltoko['nama_toko'];
                  $alamattoko = $profiltoko['alamat'];
                  $nohp = $profiltoko['no_hp'];
                  $email = $profiltoko['email'];

              }
            ?>
				
						<h5 class="card-title text-center">Struk Penjualan</h5>
						
            <div class="col-lg-5" id="cetakstrukk" style="margin: auto; width: 400px; ">
              <div id="cetakstruk" style="border: 1px solid; padding: 5px; background-color: white; width: 100%; height: 100%;">
									<div class="col-12" style="text-align: center;">
                    <b style="font-size: 18px;"><?php echo $namatoko; ?></b><br>
                    <b><?php echo $alamattoko; ?></b><br>
                    <div style="font-size: 14px; ">
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
                      <div style="font-size: 14px;">
                        <span>No : </span><span id="notr"><?php echo $anotransaksi; ?></span><span style="float: right;">Tgl : <?php echo $atgl; ?></span><br>
                        <span>Member : <?php if ($amember == "" || $amember == "zzzz") {
                          echo '-';
                        }else{ echo $amember;} ?></span>
                        <span style="float: right;">Admin : <?php echo $aadmin; ?></span><br>
                        <span>Poin saat ini : <?php echo $poinsaatini; ?></span>
                        <span style="float: right;"><?php echo $aket; ?></span>
                      </div><br>
                      <?php
                      
                    }
                    ?>
                  <div>
                    <table style="width: 100%;" id="ctk">

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

                            $format_indonesia_diskon = number_format ($nama, 0, ',', '.');
                            $hargaindo = number_format($hargaperbarang, 0, ',', '.');
                            $totalindo = number_format($hargatotal, 0, ',', '.');
                            $bayarindo = number_format($bayar, 0, ',', '.');
                            $kembalindo = number_format($kembalian, 0, ',', '.');

                            //var_dump($notransaksi, $tanggal, $idbarang, $barang, $jumlah, $hargasatuanmember, $hargasatuannormal, $poinbonus, $hargaperbarang, $hargatotal, $bayar, $kembalian, $pelanggan, $namapelanggan, $totalpoin, $admin, $keterangan);
                          
                      
                        
                      ?>
                  
                  
                        <tr style="font-size: 14px;">
                          <td style="width: 250px;"><?php echo $barang; ?></td>
                          <td style="width: 50px;">x<?php echo $jumlah; ?></td>
                          <td style="float: right; width: 100px; text-align: right;">Rp.<?php echo $hargaindo; ?></td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    } ?>
                    </table>
                    <hr width="100%" color="black" style="height: 2px;">
                    <div style="font-size: 14px;">
                      <div style="height: 80px; width: 50%; float: left;">
                        <span >Bonus poin   : <?php echo $poinbonus; ?></span><br>
                        <span >Total        : Rp.<?php echo $totalindo; ?></span><br>
                      </div>
                      <div style="height: 80px; width: 50%; float: right; text-align: right; padding-left: 30px;">
                        <span >Bayar   : Rp.<?php echo $bayarindo; ?></span><br>
                        <span >Kembali : Rp.<?php echo $kembalindo; ?></span><br>
                      </div>
                      <div style="text-align: center;">
                        <br>
                        <span>Terimakasih Telah Berbelanja.</span><br>
                        <span>Semoga Sehat Selalu.</span>
                      </div>
                    </div>
                    
                  </div>
              </div>
                  
									<p></p>
                  <div class="text-center">
                    <b style="margin-bottom: 20px;">Cetak Sebagai</b><br>
                    
                    <button id="cetak" class="btn btn-primary bi bi-images" style="width: 110px;"> JPG</button>
                    <span style="margin: 8px;"></span>
                    <a href="transaksi/cetak_struk_pdf.php?cetak=pdf&no=<?php echo $notransaksi; ?>"><button type="submit" name="btnupdate" style="width: 110px;" class="btn btn-primary bi bi-file-earmark-pdf"> PDF</button></a><br>
                    <p style="margin-top: 20px;">
                    <a href="index.php?page=data_transaksi"><button type="button" class="btn btn-outline-secondary bi bi-arrow-left-square"> Kembali</button></a>
                    </p>
                  </div>

                  
            </div>
            <div id="preview" style="width: 900px; height: 1200px; position: fixed;">
                    
            </div>

						</div>
					</div>

				</div>
			</div>
			</section>

			</main><!-- End #main -->
      
      <script src="transaksi/html2canvas.js" type="text/javascript"></script>">
      <script>
          document.getElementById("cetak").addEventListener("click", function() {
            html2canvas(document.getElementById("cetakstruk")).then(function (canvas) {		
              var notr = document.getElementById("notr").innerHTML;	
              var anchorTag = document.createElement("a");
                document.body.appendChild(anchorTag);
                document.getElementById("preview").appendChild(canvas);
                anchorTag.download = ""+notr+".jpg";
                anchorTag.href = canvas.toDataURL();
                anchorTag.target = '_blank';
                anchorTag.click();
              });
          });
      </script>
    

    
            

