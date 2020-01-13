<?php

include "koneksi.php";

if (isset($_POST['ubah'])) {
  // code...
  $id       = $_POST['id'];
  $nama     = htmlspecialchars($_POST['nama']);
  $nrp      = htmlspecialchars($_POST['nrp']);
  $jurusan  = htmlspecialchars($_POST['jurusan']);
  $email    = htmlspecialchars($_POST['email']);
  $alamat   = htmlspecialchars($_POST['alamat']);

  $query = "UPDATE mahasiswa SET id='$id',nrp='$nrp',nama='$nama',jurusan='$jurusan',email='$email',alamat='$alamat' WHERE id='$id'";

  $db = mysqli_query($conn,$query);

  if (mysqli_affected_rows($conn) > 0 ) {
    // code...
    echo "<script>
            alert('Data berhasil di Ubah!');
            document.location.href='../index.php';
          </script>";
  }else {
    // code...
    echo "<script>
            alert('Data gagal di Ubah!');
            document.location.href='../tambah.php';
          </script>";
  }
}

?>
