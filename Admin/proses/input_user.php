<?php
include 'koneksi.php';
if (isset($_POST['input_user'])) {
    $id = uniqid();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $level = $_POST['level'];

    $query_input = mysqli_query ($koneksi, "INSERT INTO user VALUES(md5('$id'),'$username','$email', md5('$password'),'$no_hp','','$level')");

    if ($query_input) {
        echo '<script>alert("data user berhasil diinput")
                window.location.href="../basic_elements.php";
                </script>';
    }else {
        echo '<script>alert("data user gagal diinput")
                window.location.href="../basic_elements.php";
                </script>';
    }
}
?>