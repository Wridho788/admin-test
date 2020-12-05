<?php
  	$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
  	while($d = mysqli_fetch_array($data)){
		?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UPDATE MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UPDATE MAHASISWA</li>
      </ol>
    </section>
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/mahasiswa/update_mahasiswa_proses.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $d['id_mahasiswa']; ?>">
                <div class="form-group">
                  <label>Nim</label>
                  <input type="text" name="nim" class="form-control" placeholder="Nim" value="<?php echo $d['nim']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $d['nama']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas">
                    <option value="<?php echo $d['kelas']; ?>">- <?php echo $d['kelas']; ?> -</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                    <option value="Karyawan">Karyawan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control" name="jurusan">
                    <option value="<?php echo $d['jurusan']; ?>">- <?php echo $d['jurusan']; ?> -</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Komputer">Sistem Komputer</option>
                    <option value="Akutansi">Akutansi</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
            <?php 
            	}
	          ?>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
<!-- /.content-wrapper -->