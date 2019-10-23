<?php
include "../../config/koneksi.php";
//mengambil data dari URL
if (isset($_GET['id_anggota'])) {
	$id = $_GET['id_anggota'];
	$data = mysqli_query($koneksi, "delete from anggota where 
		id_anggota='$id'");
	if ($data) {
		header("location:../layout/dataanggota.php");
	} else {
		echo "Data gagal dihapus!";
	}
}
