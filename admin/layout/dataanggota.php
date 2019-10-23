<?php
error_reporting(0);
session_start();
if ($_SESSION['level'] == "admin") {
  include "home.php";
  include "../../config/koneksi.php";
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Anggota</h3>
          </div> <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i>
            </button>
          </div>
          <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Anggotae</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="../logic_action/logic_tambah_anggota.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Id Anggota</label>
                      <input type="text" name="id_anggota" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <label>Nik</label>
                    <input type="number" name="nik" class="form-control">
                    <div>
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control">
                    </div>
                    <div>
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat"></textarea>
                    </div>
                    <div>
                      <label>No.telfon</label>
                      <input type="number" name="no_tlp" class="form-control">
                    </div>
                    <div>
                      <label>Pekerjann</label>
                      <input type="text" name="pekerjaan" class="form-control">
                    </div>
                    <div class="modal-footer justify-content-">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save" title="simpan data"></i></button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban" title="batal"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table id="test" class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Pekerjaan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM anggota";
                  $query = mysqli_query($koneksi, $sql);
                  $rows = mysqli_num_rows($query);
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nik']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['no_tlp']; ?></td>
                    <td><?php echo $data['pekerjaan']; ?></td>
                    <td>
                      <a href="ubah_anggota.php?id_anggota=<?php echo $data['id_anggota']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                      <a href="javascript:if(confirm('Apa Anda Yakin Ingin Mengahapus Member Dengan Nama : <?php echo $data['nama']; ?> ?')){document.location='../logic_action/hapus_anggota.php?id_anggota=<?php echo $data['id_anggota']; ?>';}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php
                    $no++;
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
    </section>
  </div>
<?php
  include "footer.php";
} else {
  echo "<script>
		alert('Anda Tidak Memiliki Hak Akses!');
		document.location='../index.php';
		</script>";
}
?>
<script type="text/javascript">
  $('#test').DataTable();
</script>