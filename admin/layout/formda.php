<?php
include "home.php";
include "../../config/koneksi.php";
?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid"></div><!-- /.container-fluid -->
	</div>
	<section class="Content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">FORM DATA ADMIN</h3>
						</div>
						<?php
						if (isset($_POST['simpan'])) {
							$id_admin = $_POST['id_admin'];
							$nama = $_POST['nama'];
							$username = $_POST['username'];
							$password = $_POST['password'];
							$alamat = $_POST['alamat'];

							if (empty($nama)) {
								echo "<div class='alert alert-warning alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								Nama Harus diisi!
							
						</div>";
							} else {
								$a = mysqli_query($koneksi, "select * from anggota where 
									nama='$nama'");
								$b = mysqli_num_rows($a);
								$sql = "insert into anggota(id_anggota, nik, nama, alamat, no_tlp, pekerjaan)
								values('$idanggota','$nik','$nama','$alamat','$notelp','$pekerjaan')";
								$query = mysqli_query($koneksi, $sql);
								if ($query) {
									echo "<div class='alert alert-success alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									Data berhasil disimpan, <a href='dataanggota.php' class='alert-link'>Lihat Data</a>
									</div>";
								} else {
									echo "<div class='alert alert-warning alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									Data gagal disimpan!
									</div>";
								}
							}
						}
						?>
						<form action="#" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Id Anggota</label>
									<input type="text" name="id_anggota" class="form-control" id="exampleInputEmail1" placeholder="">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nik</label>
									<input type="number" name="nik" class="form-control" id="exampleInputPassword1" placeholder="">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Nama</label>
									<input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="">
								</div>

								<div class="form-group">
									<label for="exampleInputFile">Alamat</label>
									<textarea class="form-control" name="alamat"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">No.telpfon</label>
									<input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1" placeholder="">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="">
								</div>
							</div>
					</div>
					<button name="simpan" class="btn btn-primary"><i class="fa fa-save" title="Simpan Data"></i></button>
					<button name="reset" class="btn btn-danger"><i class="fa fa-ban" title="Batal Proses"></i></button>
				</div>
				</form>
			</div>
		</div>
</div>
</div>
</section>
</div>
<?php
include "footer.php";
?>