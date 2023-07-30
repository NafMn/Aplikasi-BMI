<?php 
session_start();
include "./config/database.php";

function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        echo "Email harus diisi.";
    } elseif (!is_valid_email($email)) {
        //sek arep tak isi
        header("location: Register.php?pesan=format_salah");
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (username, email, password)
                    VALUES ('$username', '$email', '$hashedPassword')"; // Gunakan $hashedPassword, bukan $password

        $result = mysqli_query($connect, $query);

        if ($result) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "Daftar";
            header("location: Profile/index.php?pesan=Berhasil_Daftar");
            exit();
        } else {
            header("location: Login.php?pesan=gagal");
            exit();
        }
    }
}
?>
