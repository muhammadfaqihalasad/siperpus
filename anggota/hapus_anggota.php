<?php 
    include '../koneksi.php';

    //$kon = mysqli_connect("localhost", "root", "", "db_perpus");

    $id_anggota = $_GET["id_anggota"];
    $query = mysqli_query($kon, "DELETE FROM anggota WHERE id_anggota=$id_anggota");
    

    if($query > 0){
        echo "
        <script>
        alert('Data berhasil dihapus !');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>