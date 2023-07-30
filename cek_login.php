<?php 
    session_start();
    include "config/database.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $masuk =  mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $cek = mysqli_num_rows($masuk);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "Login";

        header("location: Profile/");
    }
    else{
        header("location: Login.php?pesan=gagal");
 }
?>