<?php 
    session_start();
    include "config/database.php";

    $identifier = $_POST['identitas']; 
    $password = $_POST['password'];


    $query = "SELECT * FROM user WHERE username = '$identifier' OR email = '$identifier'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    
        
        if (password_verify($password, $user['password'])) { // Verifikasi password yg dihash
            // Jika password cocok, set session

            $_SESSION['username'] = $identifier;
            $_SESSION['status'] = "Login";
            header("location: Profile/");
        } else {
            header("location: Login.php?pesan=password_salah");
        }
    } else {
        header("location: Login.php?pesan=gagal");
    }
?>


