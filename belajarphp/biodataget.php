<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nama :</label>
        <input type="text" name="nama_lengkap">
        <br>
        
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl">
        <br>
        
        <label for="">Tempat Lahir</label>
        <input type="text" name="tpt_lahir">
        <br>

        <input type="submit" name="input" value="Tampilkan">    
    </form>

    <!-- proses dalam satu file -->
    <?php
        if(isset($_POST["nama_lengkap"])){

            $nama =$_POST["nama_lengkap"];
            $tanggal =$_POST["tgl"];

            echo"$nama <br> $tanggal";
        }
    ?>
</body>
</html>