<?php


include "layout/header.php";

 ?>

  <div class="jumbotron pt-3 pb-3">

    <div class="container">
      <h1 class="text-center">Registrasi User</h1>
    </div>

  </div>
  <div class="container col-md-3 border border-info rounded-lg">
    <form action="proses/prosesregistrasi.php" method="post">
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
          <div class="col md-12">
            <label for="password2">Ulangi Password :</label>
            <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi Password" required>
          </div>
      </div>
      <div class="row pt-4 pb-4">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="registrasi">Registrasi</button>
          </div>
          <div class="col-md-2">

          </div>
          <div class="col-md-4">
            <a href="login.php" class="btn btn-primary btn-lg btn-success btn-block">Login</a>
          </div>
      </div>
    </form>
  </div>

<?php

include "layout/footer.php";

 ?>
