<?php

include "koneksi.php";

if (!isset($_SESSION['login'])) {
  // code...
  header("location: ../login.php");
}

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id='$id'";

$hapus = mysqli_query($conn,$query);

if (mysqli_affected_rows($hapus) > 0) {
  // code...
  echo "<script>
          alert('Data gagal di hapus!');
          document.location.href='../index.php';
        </script>";
}else {
  // code...
  echo "<script>
          alert('Data berhasil di di hapus!');
          document.location.href='../index.php';
        </script>";
}



 ?>
