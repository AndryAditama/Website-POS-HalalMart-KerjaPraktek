<?php
//memasukkan file config.php
include('config.php');
?>

<main id="main" class="main">

			<div class="pagetitle">
			<h1>Diskon Harga</h1>
			<nav>
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item">Diskon Harga</li>
				</ol>
			</nav>
			</div><!-- End Page Title -->

			<section class="section">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">

            <?php
              $query = mysqli_query ($koneksi, "SELECT * FROM tb_diskon");
                if($query == false){
                die ("Terjadi Kesalahan : ". mysqli_error($koneksi));
                }
                while ($data = mysqli_fetch_array ($query)){
                  
                  $id1 = $data['id_diskon'];
                  $nama = $data['diskon'];
                  $username = $data['poin_diskon'];

                  $format_indonesia_diskon = number_format ($nama, 0, ',', '.');
                }
            ?>
				
						<h5 class="card-title text-center">Diskon Harga</h5>
						<p></p>
            <div class="col-lg-6" style="margin: auto;">
							<form class="row g-3" method="POST" action="index.php?page=diskon_harga">
								
								
									<div class="col-12">
										<label for="inputNanme4" class="form-label">Poin Minimum Penukaran</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text bi bi-coin" id="inputGroupPrepend" style="width:50px; "></span>
										    <input type="text" name="tnama" class="form-control" id="inputNanme4" placeholder="Nama Admin" value="<?php echo($username);?>" aria-describedby="inputGroupPrepend" required>
                    </div>
									</div>
                    <div class="col-12">
                      <label for="rupiah1" class="form-label">Diskon Harga</label>
                      <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                          <input type="text" id="rupiah1" name="diskon" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo($format_indonesia_diskon); ?>" required>
                    </div>
                  </div>
									<p></p>
                                    <input type="hidden" name="tid" value=" <?php echo($id1); ?>">
                  <div class="text-center" style="margin-bottom: 24px;">
                    <a href="index.php"><button type="button" class="btn btn-secondary bi bi-arrow-left-square"> Kembali</button></a>
                    <span style="margin: 8px;"></span>
                    <button type="submit" name="btnupdate" class="btn btn-primary bi-check-circle"> Update</button>
                  </div>
									
              </form>
            </div>
              <?php

                if(isset($_POST['btnupdate'])){ //jika tombol update di klik maka akan melakukan pembacaan data yang diinput pada form dan menyimpan pada variabel masing-masing.
                    $tid = $_POST['tid'];
                    $poin = $_POST['tnama'];
                    $diskon = $_POST['diskon'];

                    $harga_diskon = str_replace(".","",$diskon);
                    var_dump($harga_diskon);
                    $harga_diskonint = (int) $harga_diskon;
                    var_dump($harga_diskonint);                  

                  //proses update data berdasarkan id
                  $edit = mysqli_query($koneksi, "UPDATE tb_diskon SET diskon = '".$harga_diskonint."',
                                                                    poin_diskon = '".$poin."'
                                                                    WHERE id_diskon = '".$tid."'
                                                                    ");

                      if ($edit) {

                        echo '<script> window.onload = function(){
                          alert("Edit Berhasil");
                          location.href = "index.php?page=diskon_harga"}
                          </script>';

                      }else{
                        echo '<script> window.onload = function(){
                          alert("Edit Gagal");
                          location.href = "index.php?page=diskon_harga"}
                          </script>';
                      }  

                }
              ?>

						</div>
					</div>

				</div>
			</div>
			</section>

			</main><!-- End #main -->

    

    
            

