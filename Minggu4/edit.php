<?php

    include 'koneksi.php';
    include 'tampil.php';
    $id=$_POST["id"];       

    $sql="UPDATE `datamhs` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi',`angkatan`='$angkatan' WHERE '".$_POST['id']."'";
    $result=mysqli_query($connect,$sql);
    
?>
<form class="form-input" method="post" id="form-input">
    <div class="form-group mb-3">                                    
        <label for="nim" class="form-label">NIM </label>
        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $row[0]['nim']; ?> placeholder="NIM Mahasiswa">                                    
    </div>
    <div class="form-group mb-3">                                                        
        <label for="nama" class="form-label">Nama </label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row[0]['nama']; ?> placeholder="Nama Mahasiswa">                                
    </div>
    <div class="form-group mb-3">
        <label for="prodi" class="form-label">Program Studi </label>
        <input type="text" class="form-control" name="prodi" id="prodi" value="<?php echo $row[0]['prodi']; ?> placeholder="Program Studi">                                    
    </div>
    <div class="form-group mb-3">                                    
        <label for="angkatan" class="form-label">Angkatan</label>
        <input type="text" class="form-control" name="angkatan" id="angkatan" value="<?php echo $row[0]['angkatan']; ?> placeholder="Tahun Angkatan">                                    
    </div>                               
</form> 

<button type="button" class="btn btn-primary" onclick="()">Simpan</button>