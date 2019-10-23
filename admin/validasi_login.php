<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
session_start();
include "../config/koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password' ");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:layout/dataanggota.php");
    } else if ($data['level'] == "anggota") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "anggota";
        header("location:../anggota/t es.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
