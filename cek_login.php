<?php 
    session_start();
    include "config/database.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    
        // Verifikasi password yg dihash
        if (password_verify($password, $user['password'])) {
            // Jika password cocok, set session
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "Login";
            header("location: Profile/");
        } else {
            header("location: Login.php?pesan=gagal");
        }
    } else {
        header("location: Login.php?pesan=gagal");
    }
?>


