<?php

include "layout/header.php";

if (isset($_SESSION['login'])) {
  // code...
  header("location:index.php");
  exit;
}

 ?>
 <div class="jumbotron pt-3 pb-3">

   <div class="container">
     <h1 class="text-center">Login</h1>
   </div>

 </div>
 <div class="container col-md-3 border border-info rounded-lg">
   <form action="proses/proseslogin.php" method="post">
     <div class="row pt-4">
         <div class="col md-12">
           <label for="username" >Username :</label>
           <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
         </div>
     </div>
     <div class="row pt-4">
         <div class="col md-12">
           <label for="password">Password :</label>
           <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
         </div>
     </div>
     <div class="row pt-4">
        <div class="col">
          <button type="submit" name="login" class="btn btn-primary btn-lg btn-success btn-block">Login</button>
        </div>
     </div>
     <div class="row pt-2 pb-4">
       <div class="col md-6">
         <a href="registrasi.php" class="">Belum Punya Akun ?</a>
       </div>
     </div>
 </div>



 <?php

include "layout/footer.php";

  ?>
