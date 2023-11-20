
<?php include('config.php'); ?>
<?php

    if(isset($_POST['btnsimpan'])){

      if ($_POST['jk'] == '1') {

        if ($_POST['kettukarpoin'] == '1'){
          date_default_timezone_set('Asia/Jakarta');
          $tgld = date('Y-m-d H:i:s',strtotime('now'));
          $notransaksi = $_POST['notransaksi'];
          $idbareng = $_POST['idbarang'];
          $jumlah = $_POST['jumlahbeli'];
          $totalharga = $_POST['hargabrg'];
          $idmember = $_POST['idmember'];
          $jum = $_POST['barangjumlahku'];
          $stok = $_POST['stokbrg'];

          $totalbarang = $_POST['jumbarang'];
          $totharga = $_POST['totalharga'];
          $poinbarang = $_POST['hitungpoin'];
          $poinbonus = $_POST['poinbonus'];
          $inputbayar = $_POST['inputbayar'];
          $inputkembalian = $_POST['inputkembalian'];
          $tampungpoin = $_POST['tampungpoinmember'];

          $memberdefault = "999999999999999"; 
          $ket = "Transaksi member + Tukar Poin";
          $adminid = $_SESSION['id_user'];

          $transaksi = mysqli_query($koneksi, "INSERT INTO tb_transaksi (notransaksi, tanggal_transaksi, hargatotal, bayar, kembalian, pelanggan, poinbonus, admin, keterangan) VALUES ('$notransaksi', '$tgld', '$totharga', '$inputbayar', '$inputkembalian', '$idmember','$poinbonus', '$adminid', '$ket')") or die(mysqli_error($koneksi));
                  
            if ($transaksi) {
              $updatemember = mysqli_query($koneksi, "UPDATE tb_member SET poin = '".$tampungpoin."' WHERE id_member = '".$idmember."'") or die(mysqli_error($koneksi));
              for ($j=0; $j<$jum; $j++){
                $sub_kalimat[] = substr($idbareng[$j],-4);
                $idbarang = explode('>', $sub_kalimat[$j]);
                $hasilid = $idbarang[1];

                // echo'<pre>';
                // var_dump( "tanggal = .$tgld.", 
                //           "no transaksi = .$notransaksi.",
                //           "ID Member = .$idmember.",
                //           "id barang = .$hasilid.",
                //           "jumlah = .$jumlah[$j].",
                //           "harga = .$totalharga[$j].",
                //           "poin = .$poinbarang[$j].",
                //           "total harga = .$totharga.",
                //           "poin bonus = .$poinbonus.",
                //           "bayar = .$inputbayar.",
                //           "kembalian = .$inputkembalian.",
                //           "===================================");

                $detail_transaksi = mysqli_query($koneksi, "INSERT INTO detail_transaksi (no_transaksi, idbarang, jumlah, poin_bonus, harga_total, tanggal) VALUES ('$notransaksi', '$hasilid', '$jumlah[$j]', '$poinbarang[$j]', '$totalharga[$j]', '$tgld')") or die(mysqli_error($koneksi));

                if($detail_transaksi){
                  
                  $updatestok = $stok[$j] - $jumlah[$j];
                  $updatebarang = mysqli_query($koneksi, "UPDATE tb_barang SET stok = '".$updatestok."' WHERE id_barang = '".$hasilid."'") or die(mysqli_error($koneksi));
                  
                  if ($updatebarang) {
                    echo '<script>alert("Transaksi Berhasil"); document.location="index.php?page=struk_penjualan&no='.$notransaksi.'";</script>';
                  }else{
                    echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                  }
                  
                }else{
                  echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                }
              }
              
            }else{
              echo '<script>alert(" transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
              
            }
                        
        }else{
        
          date_default_timezone_set('Asia/Jakarta');
          $tgld = date('Y-m-d H:i:s',strtotime('now'));
          $notransaksi = $_POST['notransaksi'];
          $idbareng = $_POST['idbarang'];
          $jumlah = $_POST['jumlahbeli'];
          $totalharga = $_POST['hargabrg'];
          $idmember = $_POST['idmember'];
          $jum = $_POST['barangjumlahku'];
          $stok = $_POST['stokbrg'];

          $totalbarang = $_POST['jumbarang'];
          $totharga = $_POST['totalharga'];
          $poinbarang = $_POST['hitungpoin'];
          $poinbonus = $_POST['poinbonus'];
          $inputbayar = $_POST['inputbayar'];
          $inputkembalian = $_POST['inputkembalian'];
          $tampungpoin = $_POST['tampungpoinmember'];

          $memberdefault = "999999999999999"; 
          $ket = "Transaksi member";
          $adminid = $_SESSION['id_user'];

          $transaksi = mysqli_query($koneksi, "INSERT INTO tb_transaksi (notransaksi, tanggal_transaksi, hargatotal, bayar, kembalian, pelanggan, poinbonus, admin, keterangan) VALUES ('$notransaksi', '$tgld', '$totharga', '$inputbayar', '$inputkembalian', '$idmember','$poinbonus', '$adminid', '$ket')") or die(mysqli_error($koneksi));
                  
            if ($transaksi) {
              $updatemember = mysqli_query($koneksi, "UPDATE tb_member SET poin = '".$tampungpoin."' WHERE id_member = '".$idmember."'") or die(mysqli_error($koneksi));
              for ($j=0; $j<$jum; $j++){
                $sub_kalimat[] = substr($idbareng[$j],-4);
                $idbarang = explode('>', $sub_kalimat[$j]);
                $hasilid = $idbarang[1];

                $detail_transaksi = mysqli_query($koneksi, "INSERT INTO detail_transaksi (no_transaksi, idbarang, jumlah, poin_bonus, harga_total, tanggal) VALUES ('$notransaksi', '$hasilid', '$jumlah[$j]', '$poinbarang[$j]', '$totalharga[$j]', '$tgld')") or die(mysqli_error($koneksi));

                if($detail_transaksi){
                  
                  $updatestok = $stok[$j] - $jumlah[$j];
                  $updatebarang = mysqli_query($koneksi, "UPDATE tb_barang SET stok = '".$updatestok."' WHERE id_barang = '".$hasilid."'") or die(mysqli_error($koneksi));
                  
                  if ($updatebarang) {
                    echo '<script>alert("Transaksi Berhasil"); document.location="index.php?page=struk_penjualan&no='.$notransaksi.'";</script>';
                  }else{
                    echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                  }
                  
                }else{
                  echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                }
              }
              
            }else{
              echo '<script>alert(" transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
              
            }
        }
      }else{
        date_default_timezone_set('Asia/Jakarta');
          $tgld = date('Y-m-d H:i:s',strtotime('now'));
          $notransaksi = $_POST['notransaksi'];
          $idbareng = $_POST['idbarang'];
          $jumlah = $_POST['jumlahbeli'];
          $totalharga = $_POST['hargabrg'];
          $idmember = $_POST['idmember'];
          $jum = $_POST['barangjumlahku'];
          $stok = $_POST['stokbrg'];

          $totalbarang = $_POST['jumbarang'];
          $totharga = $_POST['totalharga'];
          $poinbarang = $_POST['hitungpoin'];
          $poinbonus = $_POST['poinbonus'];
          $inputbayar = $_POST['inputbayar'];
          $inputkembalian = $_POST['inputkembalian'];
          $tampungpoin = $_POST['tampungpoinmember'];

          $memberdefault = "999999999999999"; 
          $ket = "Transaksi Non-Member";
          $adminid = $_SESSION['id_user'];

          $transaksi = mysqli_query($koneksi, "INSERT INTO tb_transaksi (notransaksi, tanggal_transaksi, hargatotal, bayar, kembalian, pelanggan, admin, keterangan) VALUES ('$notransaksi', '$tgld', '$totharga', '$inputbayar', '$inputkembalian', '$memberdefault', '$adminid', '$ket')") or die(mysqli_error($koneksi));
                  
            if ($transaksi) {
              for ($j=0; $j<$jum; $j++){
                $sub_kalimat[] = substr($idbareng[$j],-4);
                $idbarang = explode('>', $sub_kalimat[$j]);
                $hasilid = $idbarang[1];

                $detail_transaksi = mysqli_query($koneksi, "INSERT INTO detail_transaksi (no_transaksi, idbarang, jumlah, harga_total, tanggal) VALUES ('$notransaksi', '$hasilid', '$jumlah[$j]', '$totalharga[$j]', '$tgld')") or die(mysqli_error($koneksi));

                if($detail_transaksi){
                  
                  $updatestok = $stok[$j] - $jumlah[$j];
                  $updatebarang = mysqli_query($koneksi, "UPDATE tb_barang SET stok = '".$updatestok."' WHERE id_barang = '".$hasilid."'") or die(mysqli_error($koneksi));
                  
                  if ($updatebarang) {
                    echo '<script>alert("Transaksi Berhasil"); document.location="index.php?page=struk_penjualan&no='.$notransaksi.'";</script>';
                  }else{
                    echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                  }
                  
                }else{
                  echo '<script>alert("Transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
                }
              }
              
            }else{
              echo '<script>alert(" transaksi Gagal"); document.location="index.php?page=transaksi";</script>';
              
            }

      }
  
    }
    
?>