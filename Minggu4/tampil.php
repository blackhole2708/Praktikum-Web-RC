<table class="table table-striped table-hover">
    <div id="tampil_data"></div>
    <tr align="center">
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Angkatan</th>
        <th colspan="2">Action</th>
    </tr>

    <?php
        include 'koneksi.php';
        $sql="select * from datamhs order by nim asc";
        $result=mysqli_query($connect,$sql);
        $no=0;
        while ($data=mysqli_fetch_array($result)):
            
        if($no> 0){                    
    ?>        
    
    <tr>
        <td><?php echo $data['nim'];?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['prodi'];?></td>
        <td><?php echo $data['angkatan'];?></td>
        <td><button class="btn btn-primary" id="edit" value="edit">Edit</button></td>
        <td><button class="btn btn-danger" id="apus" value="apus">Hapus</button></td>
    </tr>
    
    <?php                                
        }else{    
    ?>
    <tr>
    
    </tr>
    <?php    
        }
        $no++;    
    ?>
    <?php endwhile;?>
</table>