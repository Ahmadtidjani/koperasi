<?php
include "home.php";
include "../../config/koneksi.php";
$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($koneksi, "select * from anggota where id_anggota='$id_anggota' ");
$data = mysqli_fetch_array($sql);
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
							<h3 class="card-title">FORM DATA ANGGOTA</h3>
						</div>
						<?php
						if (isset($_POST['simpan'])) {
							$nik = $_POST['nik'];
							$nama = $_POST['nama'];
							$alamat = $_POST['alamat'];
							$no_tlp = $_POST['no_tlp'];
							$pekerjaan = $_POST['pekerjaan'];
							$a = "update anggota set nama='$nama', nik='$nik', alamat='$alamat' where id_anggota='$id_anggota'";
							$b = mysqli_query($koneksi, $a);
							if ($b) {
								echo "<div class='alert alert-success alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								Data Berhasil Diubah, <a href='dataanggota.php' class='alert-link'>Lihat Data</a>
								</div>";
							}
						}
						?>
						<form action="#" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Id Anggota</label>
									<input type="text" name="id_anggota" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $data['id_anggota']; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nik</label>
									<input type="number" name="nik" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['nik']; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Nama</label>
									<input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['nama']; ?>">
								</div>

								<div class="form-group">
									<label for="exampleInputFile">Alamat</label>
									<textarea class="form-control" name="alamat" placeholder=""><?php echo $data['alamat']; ?></textarea>
								</div>
								<div class="form-group">
									<label for=" exampleInputFile">No.telpfon</label>
									<input type="number" name="no_tlp" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['no_tlp']; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Pekerjaan</label>
									<input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['pekerjaan']; ?>">
								</div>
							</div>
					</div>

					<button name="simpan" class="btn btn-primary"> <i class=" fa fa-save" title="Simpan Data"></i></button>
					<!-- <button name="reset" class="btn btn-danger" ><i class="fa fa-ban" title="Batal Proses">
						--> <a href="dataanggota.php" class="btn btn-danger"><i class="fa fa-ban"></i></a>

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