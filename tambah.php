<?php

include "layout/header.php";

if (!isset($_SESSION['login'])) {
  // code...
  header("location: login.php");
}

 ?>

  <div class="container col-md-6 border border-dark">
    <form action="proses/prosestambah.php" method="post">
      <div class="form-row pt-5">
        <div class="form-group col-md-5">
          <label for="nama">Nama :</label>
          <input type="nama" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
        </div>
        <div class="form-group col-md-3">
          <label for="nrp">NRP :</label>
          <input type="text" class="form-control" name="nrp" id="nrp" placeholder="Masukan NRP" required>
        </div>
        <div class="form-group col-md-4">
          <label for="jurusan">Pilih Jurusan :</label>
          <select id="jurusan" class="form-control" name="jurusan" required>
            <option selected disabled>Pilih...</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="alamat">Alamat :</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" required>
        </div>
      </div>
      <div class="form-row">
          <button type="submit" name="tambah" class="btn btn-success btn-md col-md-12">Tambah Data</button>
      </div>
      <div class="form-row pt-3 pb-5">
          <a href="index.php" class="btn btn-primary btn-md col-md-12">Kembali</a>
      </div>
    </form>
  </div>





 <?php

include "layout/footer.php";

  ?>
