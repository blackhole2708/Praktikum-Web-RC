<?php

    include 'koneksi.php';
    $nim=$_POST["nim"];
    $nama=$_POST['nama'];
    $prodi=$_POST['prodi'];
    $angkatan=$_POST['angkatan'];    

    $sql="delete from mhs where id = '".$_POST['id']."'";
    $result=mysqli_query($connect,$sql);
    echo "<p>Data telah dihapus</p>";
?>