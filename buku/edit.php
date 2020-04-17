<?php  
include '../koneksi.php';
include '../asset/header.php';

$id = $_GET['id_buku']; 
$sql = mysqli_query($kon, "SELECT * FROM buku WHERE id_buku=$id");
$query = mysqli_query($kon, "SELECT * FROM kategori");
if(isset($_POST['simpan'])){
	$judul 		 = $_POST['judul'];
	$penerbit 	 = $_POST['penerbit'];
	$pengarang 	 = $_POST['pengarang'];
	$ringkasan 	 = $_POST['ringkasan'];
	$cover 		 = $_POST['cover'];
	$stok 		 = $_POST['stok'];
	$id_kategori = $_POST['id_kategori'];

    $ass = "UPDATE buku set judul='$judul', penerbit='$penerbit', pengarang='$pengarang', ringkasan='$ringkasan', cover='$cover', stok='$stok', id_kategori='$id_kategori' WHERE 
    id_buku ='$id'";

	$res = mysqli_query($kon, $ass);
	$count = mysqli_affected_rows($kon);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di Edit');
			document.location.href='index.php';
			</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2>Edit Data Buku</h2>
					</div>
					<div class="card-body">
						<form method="post" action = "">
							<table class="table">
                            <?php
                            while($buku = mysqli_fetch_assoc($sql)):
                            ?>

							<tr>
								<td>Judul Buku</td>
								<td><input type="text" name="judul" value="<?php echo $buku['judul'];?>"></td>
							</tr>
							<tr>
								<td>Penerbit</td>
								<td><input type="text" name="penerbit"  value="<?php echo $buku['penerbit'];?>"></td>
							</tr>
							<tr>
								<td>Pengarang</td>
								<td><input type="text" name="pengarang"  value="<?php echo $buku['pengarang'];?>"></td>
							</tr>
							<tr>
								<td>Ringkasan</td>
								<td>
									<textarea name="ringkasan" value="<?php echo $buku['ringkasan'];?>">
										
									</textarea>
								</td>
							</tr>
							<tr>
								<td>Cover</td>
								<td><input type="file" name="cover"  value="<?php echo $buku['cover'];?>"></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td><input type="number" name="stok"  value="<?php echo $buku['stok'];?>"></td>
                        
							</tr>
                            <?php
                            endwhile;
                            ?>

							<tr>
								<td>Kategori</td>
								<td>
									<select style="width: 200px" name="id_kategori">
										<option value="">-- Pilih Kategori --</option>
										<?php  
											while ($kategori = mysqli_fetch_assoc($query)):
										?>
										<option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
										<?php  
											endwhile;
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td class="text-rigth" colspan="2">
									<a href="index.php" class="btn btn-dark"><i class="fas fa-angle-double-left"></i> Kembali</a>
								</td>
								<td><input type="submit" class="btn btn-dark" name="simpan" value="Simpan"></td>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../asset/footer.php';
?>