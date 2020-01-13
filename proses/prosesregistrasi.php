<?php

include "koneksi.php";

if (isset($_POST['registrasi'])) {
  // code...
  $username   = strtolower(stripslashes($_POST['username']));
  $password   = mysqli_real_escape_string($conn,$_POST['password']);
  $password2  = mysqli_real_escape_string($conn,$_POST['password2']);

  //cek apakah ada username yang sama
  $query = mysqli_query($conn,"SELECT username FROM users WHERE username='$username'");

  if (mysqli_fetch_assoc($query)) {
    // code...
    echo "<script>
            alert('username sudah ada!');
            document.location.href='../registrasi.php';
          </script>";
    exit;
  }

  //cek apakah password sudah sesuai
  if ( $password !== $password2 ) {
    // code...
    echo "<script>
            alert('password tidak sesuai!');
            document.location.href='../registrasi.php';
          </script>";
    exit;
  }

  //enkripsi password
  $password = password_hash($password,PASSWORD_ARGON2I);

  //masukan ke dalam database
  $insertdata = mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$username','$password',0)");

  if (mysqli_affected_rows($conn) > 0) {
    // code...
    echo "<script>
            alert('Berhasil membuat akun!');
            document.location.href='../login.php';
          </script>";
    exit;
  }

}




?>
