<?php  
include '../asset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota a INNER JOIN level l ON a.id_level=l.id_level WHERE id_anggota=$id_anggota";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama</strong></td>
					<td><?=$detail['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Kelas</strong></td>
					<td><?=$detail['kelas']?></td>
				</tr>
				<tr>
					<td><strong>Telepon</strong></td>
					<td><?=$detail['telp']?></td>
				</tr>
				<tr>
					<td><strong>Username</strong></td>
					<td><?=$detail['username']?></td>
				</tr>
				<tr>
					<td><strong>Password</strong></td>
					<td><?=$detail['password']?></td>
				</tr>
				<tr>
					<td><strong>Level</strong></td>
					<td><?=$detail['level']?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-dark"><i class="fas fa-angle-double-left"></i> Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../asset/footer.php';
?>