<!DOCTYPE html>
<html>
    <head>
         <!--Menuliskan tag Meta-->
         <meta charset="utf-8">
         <meta name="descriptions" content="Belajar AJAX">
         <meta name="author" content="Hasiholan-119140173">
         
        <!--Menggunakan tag title-->
        <title>Hasiholan-Praktikum4</title>
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
        <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
        
         
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Praktikum Minggu 4</h1>
            
            <form class="form-input" method="post" id="form-input">
                <div class="form-group mb-3">                                    
                    <label for="nim" class="form-label">NIM </label>
                    <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM Mahasiswa">                                    
                </div>
                <div class="form-group mb-3">                                                        
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mahasiswa">                                
                </div>
                <div class="form-group mb-3">
                    <label for="prodi" class="form-label">Program Studi </label>
                    <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Program Studi">                                    
                </div>
                <div class="form-group mb-3">                                    
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Tahun Angkatan">                                    
                </div>                               
            </form> 
            <button type="button" class="btn btn-primary" onclick="tambahUser()">Tambah</button>
        
            <div id="tampil_data"></div>                
                                                    
            <script>          
                        tambahUser();         
                function tambahUser(){               
                    var data=$('#form-input').serialize();                                 
                    $.ajax({
                        type: "POST",
                        url:"olahData.php",
                        data: data,
                        cache:false,
                        success:function(data){
                            $('#tampil_data').load("tampil.php");                                                        
                        }
                    });
                
                }
            </script>
            <!--bootstrap js-->                    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
        </div> 
    </body>
</html>