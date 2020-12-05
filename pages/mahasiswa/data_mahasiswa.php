<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA MAHASISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_mahasiswa" class="btn btn-primary" role="button" title="Tambah Data">
              <i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>KELAS</th>
                  <th>JURUSAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $no = 0;
                $data = mysqli_query($koneksi,"select * from mahasiswa ORDER BY id_mahasiswa DESC");
                while($d = mysqli_fetch_array($data)){
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $d['nim'];?></td>
                  <td><?php echo $d['nama'];?></td>
                  <td><?php echo $d['kelas'];?></td>
                  <td><?php echo $d['jurusan'];?></td>
                  <td>
                    <a href="index.php?page=update_mahasiswa&id=<?=$d['id_mahasiswa'];?>" class="btn btn-success" role="button" title="Update Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/mahasiswa/hapus_mahasiswa.php?id=<?=$d['id_mahasiswa'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>