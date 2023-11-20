<?php include('config.php'); ?>

		<?php
		date_default_timezone_set('Asia/Jakarta');
		$tgld = date('m/d/Y',strtotime('now'));
		$tgl=date('m/d/Y');
		$tgl1 = date("Y-m-d",strtotime('now'));
		
		?>

		<main id="main" class="main">

			<div class="pagetitle">
			<h1>Tambah Barang</h1>
			<nav>
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item">Data Barang</li>
				<li class="breadcrumb-item active">Tambah Barang</li>
				</ol>
			</nav>
			</div><!-- End Page Title -->

			<section class="section">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
				
						<h5 class="card-title text-center">Form Tambah Barang</h5>
						<p></p>
						<div class="col-lg-6" style="margin: auto;">
							<form class="row g-3" method="POST" action="index.php?page=tambah_barang" enctype="multipart/form-data">
								
									<div class="col-12">
										<label for="inputNanme4" class="form-label">Kode Barang</label>
                                        <input type="text" class="form-control" name="kode" placeholder="Kode Barang" required>
									</div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Barang" required>
									</div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Stok Barang</label>
                                        <input type="text" class="form-control" name="stok" placeholder="Stok Barang" required>
									</div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Harga Normal</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                            <input type="text" id="rupiah1" name="harga_normal" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Harga Member</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                                            <input type="text" id="rupiah2" name="harga_member" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
										<label for="inputNanme4" class="form-label">Poin</label>
                                        <input type="text" class="form-control" name="poin" placeholder="Poin Barang" required>
									</div>
                                    <input type="file" name="media_img" accept='.jpg, .jpeg, .png' id="media_img" class="btn btn-sm" title="Upload new profile image">
                                   	</div>
									<p></p>
                                    <div class="text-center" style="margin-bottom: 24px;">
                                        <a href="index.php?page=data_barang"><button type="button" class="btn btn-secondary bi bi-arrow-left-square"> Kembali</button></a>
										<span style="margin: 8px;"></span>
                                       <button type="submit" name="btnsimpan" class="btn btn-primary bi bi-check-circle"> Simpan</button>
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
                if(isset($_POST['btnsimpan'])){
                    $kode			= $_POST['kode'];
                    $nama		    = $_POST['nama'];
                    $stok		    = $_POST['stok'];
                    $harga_member   = $_POST['harga_member'];
                    $harga_normal   = $_POST['harga_normal'];
                    $poin           = $_POST['poin'];
                    $tgambar        = $_FILES['media_img']['name'];

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

                        $insert = mysqli_query($koneksi, "INSERT INTO tb_barang (kode_barang,nama_barang,stok,harga_member,harga_normal,poin,gambar) VALUES ('$kode', '$nama', '$stok', '$harga_memberint', '$harga_normalint', '$poin', '$filename')") or die(mysqli_error($koneksi));

                        if($insert){
                            
                            echo '<script> window.onload = function(){
                                alert("Tambah Data Berhasil");
                                location.href = "index.php?page=data_barang"}
                                </script>';

                        }else{
                            echo '<script> window.onload = function(){
                                alert("Tambah Data Gagal");
                                location.href = "index.php?page=data_barang"}
                                </script>';
                        }
                    }else if($tgambar==''){
                        $insert = mysqli_query($koneksi, "INSERT INTO tb_barang (kode_barang,nama_barang,stok,harga_member,harga_normal,poin) VALUES ('$kode', '$nama', '$stok', '$harga_memberint', '$harga_normalint', '$poin')") or die(mysqli_error($koneksi));

                        if($insert){
                            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=data_barang";</script>';
                        }else{
                            echo '<script> window.onload = function(){
                                alert("Tambah Data Gagal");
                                location.href = "index.php?page=data_barang"}
                                </script>';
                            }
                        }

                    
                }
            ?>
                    
