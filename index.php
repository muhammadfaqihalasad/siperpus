<?php
include 'koneksi.php';
include 'asset/header.php';

$buku = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(stok) AS jb FROM buku"));
$jumlah_buku = $buku["jb"];

$anggota = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS ja FROM anggota"));
$jumlah_anggota = $anggota["ja"];

$pinjam = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jt FROM peminjaman"));
$jumlah_transaksi = $pinjam["jt"];
?>

<div class="container">
    <div class="row mt-4">
    <div class="col-md">
    <h2><i class="fas fa-chart-line mr-2"></i>Dashboard</h2>
    <hr class="bg-dark">
    </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white">
    <h5 class="card-title">Jumlah Buku</h5>
    <p class="card-text" style="font-size:60px"><?= $jumlah_buku; ?></p>
    <a href="http://localhost/siperpus/buku/index.php" class="text-white">Lebih Detail>>><i class="fas-fa-angle-double-right"></i></a>
  </div>
</div>
    </div>

    <div class="col-md-4">
    <div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white">
    <h5 class="card-title">Jumlah Anggota</h5>
    <p class="card-text" style="font-size:60px"><?= $jumlah_anggota; ?></p>
    <a href="http://localhost/siperpus/anggota/index.php" class="text-white">Lebih Detail>>><i class="fas-fa-angle-double-right"></i></a>
  </div>
  </div>
    </div>

    <div class="col-md-4">
    <div class="card bg-dark" style="width: 18rem;">
  <div class="card-body text-white">
    <h5 class="card-title">Jumlah Transaksi</h5>
    <p class="card-text" style="font-size:60px"><?= $jumlah_transaksi; ?></p>
    <a href="http://localhost/siperpus/transaksi/index.php" class="text-white">Lebih Detail>>><i class="fas-fa-angle-double-right"></i></a>
  </div>
    </div>
    </div>
</div>

<?php
include 'asset/footer.php';
?>