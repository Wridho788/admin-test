<?php
include "../../conf/conn.php";
$id = $_GET['id'];
$query = ("DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'");
$result_query = mysqli_query($koneksi, $query);
        if(!$result_query){
            die("Query Failed" . mysqli_error($koneksi));
           }else{
               echo '<script>alert("Data Berhasil Dihapus !!!");
               window.location.href="../../index.php?page=data_mahasiswa"</script>';
            }
?>