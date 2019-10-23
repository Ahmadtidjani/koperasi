<?php
include "../../config/koneksi.php";
//mengambil data dari URL
if (isset($_GET['id_admin'])) {
	$id = $_GET['id_admin'];
	$data = mysqli_query($koneksi, "delete from admin where 
		id_admin='$id'");
	if ($data) {
		header("location:../layout/dataadmin.php");
	} else {
		echo "Data gagal dihapus!";
	}
}
