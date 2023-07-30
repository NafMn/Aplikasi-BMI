<?php 
    session_start();
    include "./config/database.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, email, password)
                VALUE ('$username', '$email', '$password')";
    $result = mysqli_query($connect,$query);

        if($result){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "Daftar";
            header("location: Profile/index.php?pesan=Berhasil_Daftar");
            exit();
        }
        else{
            header("location: Login.php?pesan=gagal");
            exit();
        }
    }
?>