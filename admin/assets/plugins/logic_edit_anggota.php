<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
include "koneksi.php";
if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $pekerjaan = $_POST['pekerjaan'];
    $a = "update anggota set nama='$nama', nik='$nik' where id_anggota='$id_anggota'";
    $b = mysqli_query($koneksi, $a);
    if ($b) {
        echo "<div class='alert alert-success alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								Data Berhasil Diubah, <a href='dataanggota.php' class='alert-link'>Lihat Data</a>
								</div>";
    }
}
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
</script>