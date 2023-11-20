<?php
//memasukkan file config.php
include('config.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Barang</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Data Barang</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
           
            <a href="index.php?page=tambah_barang"><button type="submit" name="btntambah" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal"><span class="bi bi-plus-square"> Tambah</span></button></a>

            <p></p>

            
            <div  style="position: relative; overflow:auto;">
              
            <!-- Table with stripped rows -->
            <table class="table datatable table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kode</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Stok</th>
                  <th scope="col">Harga Member</th>
                  <th scope="col">Harga Normal</th>
                  <th scope="col">Poin</th>
                  <th scope="col">Gambar</th>
                  <th scope="col" style="width: 60px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
              $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang ORDER BY nama_barang ASC") or die(mysqli_error($koneksi));
              //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
              if(mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                
                //melakukan perulangan while dengan dari dari query $sql
                while($data = mysqli_fetch_assoc($sql)){

                  $hmember = $data['harga_member'];
                  $hnormal = $data['harga_normal'];
                  $harga_member = number_format ($hmember, 0, ',', '.');
                  $harga_normal = number_format ($hnormal, 0, ',', '.');
                  //menampilkan data perulangan
              ?>
                  
                <tr style="max-height: 80px">
                  <td><?php echo ($no); ?></td>
                  <td><?php echo $data['kode_barang'];?></td>
                  <td><?php echo $data['nama_barang'];?></td>
                  <td><?php echo $data['stok']?></td>
                  <td><?php echo "Rp.$harga_member" ;?></td>
                  <td><?php echo "Rp.$harga_normal" ;?></td>
                  <td><?php echo $data['poin'] ;?></td>
                  <td><center> <?php if ($data['gambar'] == '') {
                    echo'<img src="gambar/pic.png" alt="'.$data['nama_barang'].'" style="max-height: 60px;"> </td> ';
                  } else{
                    echo '<img src="gambar/'.$data['gambar'].'" alt="'.$data['nama_barang'].'" style="max-height: 60px;"></center> </td>
                  ';}               
                  ?>
              <?php
                echo'
                <td>
                <div style="margin: 2px;">
                <a href="index.php?page=edit_barang&id_barang='.$data['id_barang'].'" > <button name="btnedit" class="btn btn-secondary btn-sm" style="width: 80px;"> <span class="bi bi-pencil"> Edit</span> </button></a>
                </div>
                <div style="margin: 2px;">
                <a href="index.php?page=hapus_barang&id_barang='.$data['id_barang'].'&pic='.$data['gambar'].'" class="btn btn-danger btn-sm"  style="width: 80px;" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><span class="bi bi-trash"> Hapus</span></a>
                </div>

                </td>';
                
                $no++;
                  
                }
              }

              ?>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->
            </div>
            
            
          </div>
        </div>



      </div>
    </section>
</main>

  