<?php
include "home.php";
include "koneksi.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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
          <h3 class="card-title">Data Anggota</h3>
        </div> <!-- /.card-header -->
        <div class="card-title">
          <a href="formda.php" class="btn btn-primary"> <i class="fa fa-plus"></i></a>
        </div>
        <!-- /.card-body -->
        <div class="card-body">
          <table class="table table-striped">
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
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
    </div>
</div>
</section>
</div>



<?php
include "footer.php";
?>