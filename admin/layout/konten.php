<?php 
include"home.php";
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
          <h3 class="card-title">data anggota</h3>
        </div>
        <div>
          <a class="btn btn-primary" href="formda.php" style="width: 50px">+</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>                  
              <tr>
                <th style="width: 10px">no</th>
                <th>nama</th>
                <th>alamat</th>

                <th>no.tlfn</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                 
                </td>
                <td></td>
                <td>
                  <button class="btn btn-primary" type="submit">simpan</button>
                  <button class="btn btn-primary" type="reset">hapus</button></button>

                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary" type="submit">simpan</button>
                <button class="btn btn-danger" type="reset">hapus</button></td>

                
              </tr>
              <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary" type="submit">simpan</button>
                <button class="btn btn-primary" type="reset">hapus</button></td>
                
              </tr>
              <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td></td>
                <td></td>
                <td><button class="btn btn-primary" type="submit">simpan</button>
                <button class="btn btn-primary" type="reset">hapus</button></td>
                
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
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
include"footer.php";
?>