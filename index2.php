<?php

include "layout/header.php";

$page = ($_GET['page']) ? $_GET['page']:1;

$limit = 4;

$limitAwal = ($page - 1) * $limit;

$query  = "SELECT * FROM mahasiswa LIMIT $limitAwal,$limit";
$db     = mysqli_query($conn,$query);
$no     = $limitAwal + 1;

$result = "SELECT * FROM mahasiswa";

$sql2 = mysqli_num_rows(mysqli_query($conn,$result));

$jumlahpage = ceil($sql2 / $limit);

$jarak = 2;

$noAwal = ($page > $jarak) ? $page - $jarak:1;

$noAkhir = ($page < ($jumlahpage - $jarak )) ? $page + $jarak : $jumlahpage ;


if (!isset($_SESSION['login'])) {
  // code...
  header("location: login.php");
}

 ?>

 <div class="jumbotron pt-1 pb-1">
   <h1 class="display-5">Daftar mahasiswa</h1>
   <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
   <hr class="my-4">
   <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
   <a class="btn btn-danger btn-lg" href="proses/proseslogout.php" role="button">Logout</a>
 </div>

 <div class="container mt-1">
   <table class="table">
     <thead class="thead-dark">
       <tr>
         <th scope="col">No</th>
         <th scope="col">Nama</th>
         <th scope="col">NRP</th>
         <th scope="col">Jurusan</th>
         <th scope="col">Email</th>
         <th scope="col">Alamat</th>
       </tr>
     </thead>
     <tbody>
      <?php while ($mahasiswa = mysqli_fetch_assoc($db)):?>
       <tr>
             <th scope="row"><?= $no++; ?></th>
             <td><?= $mahasiswa['nama']; ?></td>
             <td><?= $mahasiswa['nrp']; ?></td>
             <td><?= $mahasiswa['jurusan']; ?></td>
             <td><?= $mahasiswa['email']; ?></td>
             <td><?= $mahasiswa['alamat']; ?></td>
       </tr>
      <?php endwhile ;?>
   </table>
 </div>
 <div class="container">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php if ($page == 1): ?>
          <li class="page-item disabled"><a class="page-link" href="">First</a></li>
          <li class="page-item disabled"><a class="page-link" href="">&laquo;</a></li>
        <?php else: ?>
          <li class="page-item"><a class="page-link"href="index2.php?page=1">First</a></li>
          <li class="page-item"><a class="page-link"href="index2.php?page=<?= $page - 1; ?>">&laquo;</a></li>
        <?php endif; ?>
        <?php for ($i= $noAwal; $i <= $noAkhir ; $i++) :
            $ganti = ($page == $i) ? "class='page-item active'": "class='page-item'";
        ?>
          <li <?= $ganti; ?>><a class="page-link"href="index2.php?page=<?= $i ?>"><?= $i; ?></a></li>
        <?php endfor; ?>
        <?php if ($page == $jumlahpage): ?>
          <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
          <li class="page-item disabled"><a class="page-link" href="">Last</a></li>
        <?php else :?>
          <li class="page-item"><a class="page-link" href="index2.php?page=<?= $page + 1 ;?>">&raquo;</a></li>
          <li class="page-item"><a class="page-link" href="index2.php?page=<?= $jumlahpage; ?>">Last</a></li>
        <?php endif; ?>
      </ul>
    </nav>
 </div>
 <?php

include "layout/footer.php"

  ?>
