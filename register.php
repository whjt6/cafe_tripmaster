<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (name, email, password)
                VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['uname'] = $username;
            header('Location: index.php');
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Selamat, registrasi berhasil!')
            window.location.href='login.php';
            </SCRIPT>");
            $name = "";
            $email = "";
            $_POST['password'] = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }   
}
 
?>