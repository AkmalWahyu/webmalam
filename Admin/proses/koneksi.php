<?php
    $localhost='localhost';
    $user='root';
    $password='';
    $db='web_berita';

    $koneksi=mysqli_connect($localhost,$user,$password,$db);
    if($koneksi) {
        // echo"<script>alert('koneksi berhasil')</script>";
    } else {
        echo "<script>alert('koneksi gagal')</script>";
    }
?>

