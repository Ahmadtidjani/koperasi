		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css	">
		<?php
		include "../../config/koneksi.php";
		$idanggota = $_POST['id_anggota'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$notelp = $_POST['no_tlp'];
		$pekerjaan = $_POST['pekerjaan'];
		if (empty($nama)) {
			echo "<script type='text/javascript'>
			setTimeout(function () { 
				swal({
					title: 'Nama Harus Diisi!',
					dangerMode: true,
					type: 'warning',
					icon: 'warning',
					timer: 5000,
					showConfirmButton: true
				});  
			},10); 
			window.setTimeout(function(){ 
				window.location.replace('../layout/dataanggota.php');
			} ,3000); 
			</script>";;
		} else {
			$a = mysqli_query($koneksi, "select * from anggota where 
					nama='$nama'");
			$b = mysqli_num_rows($a);
			$sql = "insert into anggota(id_anggota, nik, nama, alamat, no_tlp, pekerjaan)
				values('$idanggota','$nik','$nama','$alamat','$notelp','$pekerjaan')";
			$query = mysqli_query($koneksi, $sql);
			if ($query) {
				echo "<script type='text/javascript'>
					setTimeout(function () { 
						swal({
							title: 'Data Berhasil Disimpan!',
							dangerMode: false,
							type: 'success',
							icon: 'success',
							timer: 5000,
							showConfirmButton: true
						});  
					},10); 
					window.setTimeout(function(){ 
						window.location.replace('../layout/dataanggota.php');
					} ,3000); 
					</script>";;
			} else {
				echo "<div class='alert alert-warning alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data gagal disimpan!
					</div>";
			}
		}
		?>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
		</script>