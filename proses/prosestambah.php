<?php

include "koneksi.php";

if (isset($_POST['tambah'])) {
  // code...
  $nama     = htmlspecialchars($_POST['nama']);
  $nrp      = htmlspecialchars($_POST['nrp']);
  $jurusan  = htmlspecialchars($_POST['jurusan']);
  $email    = htmlspecialchars($_POST['email']);
  $alamat   = htmlspecialchars($_POST['alamat']);

  $query = "INSERT INTO mahasiswa VALUES (NULL,'$nrp','$nama','$jurusan','$email','$alamat')";

  $db = mysqli_query($conn,$query);

  if (mysqli_affected_rows($conn) > 0 ) {
    // code...
    echo "<script>
            alert('Data berhasil di tambahkan!');
            document.location.href='../index.php';
          </script>";
  }else {
    // code...
    echo "<script>
            alert('Data gagal di tambahkan!');
            document.location.href='../tambah.php';
          </script>";
  }
}

?>
