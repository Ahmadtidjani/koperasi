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
					<div class="card card-primary ">
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
								echo "<div class= 'alert alert-warning alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert'
								aria-hidden'true'>&times;<button>
								Nama harus diisi!
								</div>";
							} else {
								$a = mysqli_query($koneksi, "select * from admin where
									nama='$nama'");
								$b = mysqli_num_rows($a);
								$sql = "insert into admin(id_admin, nama, username, password, alamat)
								values('$id_admin', '$nama', '$username','$password', '$alamat')";
								$query = mysqli_query($koneksi, $sql);
								if ($query) {
									echo "<div class= 'alert alert-warning alert-dismissable'>
									<button type='button' class='close' data-dismiss='alert'
									aria-hidden 'true'>&times;<button>
									Data Berhasil Disimpan, <a href='dataadmin.php' class='alert-link'>Lihat Data</a>
									</div>";
								} else {
									echo "<div class= 'alert alert-warning alert-dismissable'
									<button type='button' class='close' data-dismiss='alert'
									aria-hidden'true'>&times;</button>
									Data Gagal Disimpan!
									</div>";
								}
							}
						}
						?>
						<form action="#" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Id Admin</label>
									<input type="number" name="id_admin" class="form-control" id="exampleInputEmail1" placeholder="">
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="nama" class="form-control">
								</div>
								<div class="form-group">
									<label>User name</label>
									<input type="text" name="username" class="form-control">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="number" name="password" class="form-control">
								</div>
								<div class="form-group">
									<label>alamat</label>
									<textarea class="form-control" name="alamat"></textarea>
								</div>


								<div>
									<button name="simpan" class="btn btn-primary"><i class="fa fa-save" title="Simpan Data"></i></button>
									<button name="reset" class="btn btn-danger"><i class="fa fa-ban" title="Batal Proses"></i></button>
								</div>
								<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Default Modal</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
											<div class="modal-body">
												<p>One fine body…</p>
											</div>
											<div class="modal-footer justify-content-between">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
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