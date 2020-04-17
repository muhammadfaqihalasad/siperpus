<?php 

    $kon = mysqli_connect("localhost", "root", "", "db_perpus");
    $id_buku = $_GET["id_buku"];
    $query = mysqli_query($kon, "DELETE FROM buku WHERE id_buku=$id_buku");
    

    if($query>0){
        echo "
        <script>
        alert('Data berhasil dihapus !');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>