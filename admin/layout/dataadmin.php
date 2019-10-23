<?php
include "home.php";
include "../../config/koneksi.php";
?>
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Admin</h3>
        </div> <!-- /.card-header -->
        <div class="card-body">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i>
          </button>
        </div>
        <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Form Data Admin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="../logic_action/logic_tambah_admin.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">id_admin</label>
                    <input type="number" name="id_admin" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                  <div>
                    <label>username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div>
                    <label>password</label>
                    <input type="password" name="password" class="form-control">
                  </div>
                  <div>alamat
                    <textarea name="alamat" class="form-control"></textarea>
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
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama</th>
                <th>User_name</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM admin";
              $query = mysqli_query($koneksi, $sql);
              $rows = mysqli_num_rows($query);
              $no = 1;
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td><?php echo $data['alamat']; ?></td>

                  <td>
                    <a href="ubah_admin.php?id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="javascript:if(confirm('Apa Anda Yakin Ingin Mengahapus admin Dengan Nama : <?php echo $data['nama']; ?> ?')){document.location='../logic_action/hapus_admin.php?id_admin=<?php echo $data['id_admin']; ?>';}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
      <!-- /.card -->


      <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</section>
<!-- /.content -->
</div>



<?php
include "footer.php";
?>