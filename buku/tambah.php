<?php  
include '../koneksi.php';
include '../asset/header.php';

$query = mysqli_query($kon, "SELECT * FROM kategori");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2>Tambah Data Buku</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<table class="table">
							<tr>
								<td>Judul Buku</td>
								<td><input type="text" name="judul"></td>
							</tr>
							<tr>
								<td>Penerbit</td>
								<td><input type="text" name="penerbit"></td>
							</tr>
							<tr>
								<td>Pengarang</td>
								<td><input type="text" name="pengarang"></td>
							</tr>
							<tr>
								<td>Ringkasan</td>
								<td>
									<textarea name="ringkasan">
										
									</textarea>
								</td>
							</tr>
							<tr>
								<td>Cover</td>
								<td><input type="file" name="cover"></td>
							</tr>
							<tr>
								<td>Stok</td>
								<td><input type="number" name="stok"></td>
							</tr>
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
								<th></th>
								<th><input type="submit"class="btn btn-dark" name="simpan" value="Simpan"></th>
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