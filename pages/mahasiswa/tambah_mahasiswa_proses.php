<?php
    include "../../conf/conn.php";
    if($_POST)
    {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $query=("INSERT INTO mahasiswa(nim, nama, kelas, jurusan) VALUES ('$nim','$nama','$kelas','$jurusan')");
        $result_query = mysqli_query($koneksi, $query);
        if(!$result_query){
            die("Query Failed" . mysqli_error($koneksi));
            }else{
            echo '<script>alert("Data Berhasil Ditambahkan !!!");
            window.location.href="../../index.php?page=data_mahasiswa"</script>';
            }
    }
?>