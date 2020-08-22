<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // query menampilkan username dan password
    $querry = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($querry);
    $data = mysqli_fetch_assoc($querry);

    // logika loginnya
    if ($cek > 0) {
        if ($data['level'] == 'admin') {
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data ['level'];
        $_SESSION['id_user'] = $data ['id_user'];

        echo '<script>alert ("selamat datang mimin")
        window.location.href="../index.php";
        </script>';

    } else if ($data['level'] == 'operator') {
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['id_user'] = $data ['id_user'];
        echo '<script> alert ("Selamat Datang Operator")
        window.location.href="../index.php";
        </script>';
    } else if ($data['level'] == 'autor') {
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data ['level'];
        $_SESSION['id_user'] = $data ['id_user'];
        echo '<script>alert ("selamat datang autor")
        window.location.href="../index.php";
        </script>';
    }else {
        header('location:../login.php?pesan=gagal');
    }  
    
}else {
    header("location:../login.php");
    } } 
?>