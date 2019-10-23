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
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">DATA DIRI</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NAMA LENGKAP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ALAMAT</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your addresss">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NO.HP</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter your number">
                  </div>
                  <div class="form-group">
                    <label>Choice</label>
                    <select class="form-control">
                        <option>Tes</option>
                        <option>Tes</option>
                        <option>Tes</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
</form>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>



  <?php 
include"footer.php";
 ?>