<?php 
include '../asset/header.php';
?>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class=""></i> Tambah Data Anggota</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<div class="form-group">
								<label for="anggota">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan Nama Lengkap">
							</div>						
							<div class="form-group">
								<label for="kelas">Kelas</label>
								<input type="text" class="form-control" name="kelas"id="kelas" placeholder="Masukkan Kelas">
								<small class="form-text text-muted">Contoh : XRPL7</small>
							</div>
							<div class="form-group">
								<label for="telp">No.Telepon</label>
								<input type="text" class="form-control" name="telp"id="telp" placeholder="Masukkan No.Telepon">
								<small class="form-text text-muted">Contoh : 111-222-3333</small>
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username"id="username" placeholder="Masukkan Username"> 
							</div>
								<div class="form-group">
								<label for="password">Password</label>
								<input type="text" class="form-control" name="password"id="password" placeholder="Masukkan Password"> 
							</div>
							<tr>
								<td class="text-rigth" colspan="2">
									<a href="index.php" class="btn btn-dark"><i class="fas fa-angle-double-left"></i> Kembali</a>
								</td>
							</tr>
							<td></td>
							<td><input type="submit" class="btn btn-dark" name="simpan" value="Simpan"></td>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include '../asset/footer.php';
?>