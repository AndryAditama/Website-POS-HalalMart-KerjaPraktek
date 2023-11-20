<?php include('config.php'); ?>

		<?php
		date_default_timezone_set('Asia/Jakarta');
		$tgld = date('m/d/Y',strtotime('now'));
		$tgl=date('m/d/Y');
		$tgl1 = date("Y-m-d",strtotime('now'));
		
		?>

		<main id="main" class="main">

			<div class="pagetitle">
			<h1>Edit Barang</h1>
			<nav>
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item">Data Barang</li>
				<li class="breadcrumb-item active">Edit Barang</li>
				</ol>
			</nav>
			</div><!-- End Page Title -->

            <?php
                if (isset($_GET['id_barang'])) {
                    $id = $_GET['id_barang'];
                    # code...
                    $query = mysqli_query ($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id'");
                      if($query == false){
                      die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
                      }
                      while ($data = mysqli_fetch_array ($query)){
                        
                        $id1 = $data['id_barang'];
                        $kode = $data['kode_barang'];
                        $nama = $data['nama_barang'];
                        $stok = $data['stok'];
                        $hmem = $data['harga_member'];
                        $hnor = $data['harga_normal'];
                        $poin = $data['poin'];
                        $gambar = $data['gambar'];

                        $format_indonesia_normal = number_format ($hnor, 0, ',', '.');
                        $format_indonesia_member = number_format ($hmem, 0, ',', '.');
                      }
                      
                  }
            ?>

			<section class="section">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
				
						<h5 class="card-title text-center">Form Edit Barang</h5>
						<p></p>
						<div class="col-lg-6" style="margin: auto;">
							<form class="row g-3" method="POST" action="index.php?page=edit_barang" enctype="multipart/form-data">
                                    <input type="hidden" name="idedit" value="<?php echo($id1); ?>">
                                    <input type="hidden" name="img_url" value="<?php echo($gambar); ?>">
									<div class="col-12">
										<label for="inputNanme4" class="form-label">Kode Barang</label>
                                        <input type="text" class="form-control" name="kode" value="<?php echo($kode); ?>" placeholder="Kode Barang" required>
									</div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo($nama); ?>" placeholder="Nama Barang" required>
									</div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Stok Barang</label>
                                        <input type="text" class="form-control" name="stok" value="<?php echo($stok); ?>" placeholder="Stok Barang" required>
									</div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Harga Normal</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                            <input type="text" id="rupiah1" name="harga_normal" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo($format_indonesia_normal); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Harga Member</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                            <input type="text" id="rupiah2" name="harga_member" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo($format_indonesia_member); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Poin</label>
                                        <input type="text" class="form-control" name="poin" value="<?php echo($poin); ?>" placeholder="Poin Barang" required>
									</div>
                                    <div class="col-md-8 col-lg-9">
                                        <?php
                                            if ($gambar == '') {
                                                echo'
                                                <img src="gambar/pic.png" alt="($nama)" style="max-width:80px;">
                                                ';
                                            }else{
                                                echo'
                                                <img src="gambar/'.$gambar.'" alt="($nama)" style="max-width:80px;">
                                                ';
                                            }
                                        ?>
                                    </div>
                                    <input type="file" name="media_img" accept='.jpg, .jpeg, .png' id="media_img" class="btn btn-sm" title="Upload new profile image">
									</div>
									<p></p>
                                    <div class="text-center" style="margin-bottom: 24px;">
                                        <a href="index.php?page=data_barang"><button type="button" class="btn btn-secondary bi bi-arrow-left-square"> Kembali</button></a>
										<span style="margin: 8px;"></span>
                                       <button type="submit" name="btnupdate" class="btn btn-primary bi bi-check-circle"> Update</button>
                                    </div>
                    		</form>
						</div>
						</div>
					</div>

				</div>
			</div>
			</section>

			</main><!-- End #main -->


            <?php
                if(isset($_POST['btnupdate'])){
                    $idedit         = $_POST['idedit'];
                    $kode			= $_POST['kode'];
                    $nama		    = $_POST['nama'];
                    $stok		    = $_POST['stok'];
                    $harga_member   = $_POST['harga_member'];
                    $harga_normal   = $_POST['harga_normal'];
                    $poin           = $_POST['poin'];
                    $tgambar        = $_FILES['media_img']['name'];
                    $img_url        = $_POST['img_url'];

                    //convert inputan harga menjadi int (membuang titik)
                    $harga_memberstr = str_replace(".","",$harga_member);
                    var_dump($harga_memberstr);
                    $harga_memberint = (int) $harga_memberstr;
                    var_dump($harga_memberint);

                    $harga_normalstr = str_replace(".","",$harga_normal);
                    var_dump($harga_normalstr);
                    $harga_normalint = (int) $harga_normalstr;
                    var_dump($harga_normalint);

                    $name =uniqid(time());
                    $extension = pathinfo($_FILES['media_img']['name'], PATHINFO_EXTENSION);
                    $filename = $name . "." . $extension;
                    //set nama foto
                    $gambar_default = 'pic.png';
                    $folder = './gambar/';
                    $sumber = $_FILES['media_img']['tmp_name'];
                    //proses pindah foto
                    move_uploaded_file($sumber, $folder.$filename);

                    if($tgambar != ''){

                        $update = mysqli_query($koneksi, "UPDATE tb_barang SET  kode_barang='".$kode."',
                                                                                nama_barang='".$nama."',
                                                                                stok='".$stok."',
                                                                                harga_member='".$harga_memberstr."',
                                                                                harga_normal='".$harga_normalstr."',
                                                                                poin='".$poin."',
                                                                                gambar='".$filename."'
                                                                                WHERE id_barang='".$idedit."'") or die(mysqli_error($koneksi));

                        if($update){
                            unlink('./gambar/'. $img_url);
                            echo '<script> window.onload = function(){
                                alert("Edit Data Berhasil");
                                location.href = "index.php?page=data_barang"}
                                </script>';

                        }else{
                            echo '<script> window.onload = function(){
                                alert("Edit Data Gagal");
                                location.href = "index.php?page=edit_barang"}
                                </script>';
                        }
                    }else if($tgambar==''){
                        $update = mysqli_query($koneksi, "UPDATE tb_barang SET  kode_barang='".$kode."',
                                                                                nama_barang='".$nama."',
                                                                                stok='".$stok."',
                                                                                harga_member='".$harga_memberstr."',
                                                                                harga_normal='".$harga_normalstr."',
                                                                                poin='".$poin."'
                                                                                WHERE id_barang='".$idedit."'") or die(mysqli_error($koneksi));

                        if($update){
                            
                            echo '<script> window.onload = function(){
                            alert("Edit Data Berhasil");
                            location.href = "index.php?page=data_barang"}
                            </script>';

                        }else{
                            echo '<script> window.onload = function(){
                            alert("Edit Data Gagal");
                            location.href = "index.php?page=edit_barang"}
                            </script>';
                        }

                    }
                }
            ?>     
