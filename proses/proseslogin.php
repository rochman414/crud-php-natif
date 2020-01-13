<?php

session_start();

include "koneksi.php";

if (isset($_POST['login'])) {
  // code...
  $username = $_POST['username'];
  $password = $_POST['password'];

  //cek apakah ada username dalam database
  $query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");


  if (mysqli_num_rows($query) === 1) {
    // code...
    $hasil = mysqli_fetch_assoc($query);

    if (password_verify($password,$hasil['password'])) {
      // code...

      $_SESSION['login'] = true;
      if ($hasil['role'] == 1) {
        // code...
        header("location: ../index.php");
      }else{
        header("location: ../index2.php");
      }

    }

  } else {
      echo "<script>
              alert('username atau password salah!');
              document.location.href='../login.php';
            </script>";
  }

}

 ?>
