<?php
$this->simple_login->cek_login();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>  
    <link rel="stylesheet" type="text/css" href="assets/admin/dash/style.css">
    <style type="text/css">
        .row{
            display: block;
            position: relative;
        }
    </style>
</head>
<body>
    <a style="float: right;" href="<?php echo base_url(); ?>login/logout">Logout</a>
    <div id="sidebar">

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Pesan</a></li>
            <li><a href="#">Timeline</a></li>
        </ul>

        <div id="sidebar-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
        
    </div>
    <div class="row">
    <h1 align="center", style="color: grey; font-size: 40px;">Sistem Informasi</h1>
    <h2 align="center", style="color: orange;">Monitoring Tugas Akhir</h2>
    </div>
    
    <div style="text-align: center; opacity: 0;">
        <input type="button" value="Daftar Dosen" onclick="location='register'" style="width: 200px; line-height: 50px; margin: 0 auto" />
        <input type="button" value="Daftar Mahasiswa" onclick="location='register'" style="width: 200px; line-height: 50px; margin: 0 auto" /> 
    </div>
    
    <div class="row" style="padding: 150px 0; text-align: center;">
    <a href="<?php echo base_url().'admin/regd'; ?>" style="text-decoration: none; background-color: #333; color: white; border-radius: 8px;position: relative; padding: 30px;">Daftar Dosen</a>
    <a href="<?php echo base_url().'admin/regm'; ?>" style="text-decoration: none; background-color: #333; color: white; border-radius: 8px;position: relative; padding: 30px;">Daftar Mahasiswa</a>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#sidebar-btn').click(function(){
                $('#sidebar').toggleClass('visible');
            });
        });
    </script>

</body>
</html>