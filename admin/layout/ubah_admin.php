<?php
include "home.php";
include "../../config/koneksi.php";
$id_admin = $_GET['id_admin'];
$sql = mysqli_query($koneksi, "select * from admin where id_admin='$id_admin' ");
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
                            <h3 class="card-title">FORM DATA ADMIN</h3>
                        </div>
                        <?php
                        if (isset($_POST['simpan'])) {
                            $id_admin = $_POST['id_admin'];
                            $nama = $_POST['nama'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $alamat = $_POST['alamat'];
                            $a = "update admin set nama='$nama', username='$username' where id_admin='$id_admin'";
                            $b = mysqli_query($koneksi, $a);
                            if ($b) {
                                echo "<div class='alert alert-success alert-dismissable'>
								<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
								Data Berhasil Diubah, <a href='dataadmin.php' class='alert-link'>Lihat Data</a>
								</div>";
                            }
                        }
                        ?>
                        <form action="#" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Id Admin</label>
                                    <input type="text" name="id_admin" class="form-control" id="exampleInputEmail1" placeholder="" value="<?php echo $data['id_admin']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $data['username']; ?>">
                                </div>
                                <div>
                                    <label for="">password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Alamat</label>
                                    <textarea class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>"></textarea>
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