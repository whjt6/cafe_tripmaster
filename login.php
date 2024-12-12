<?php 

include 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uname'] = $row['email'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    } 

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>loginApp</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

</head>
        
<body>   
    <div id="main">
        <img src="cafe Trip.jpg">
        <center><h2>Login Form</h2></center>
    
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Alamat Email"><br>
        <input type="password" name="password" placeholder="Password"
        minlength="8" maxlength="20"><br>
        <button type="submit" name="submit" class="button">Login</button><br>
    </form><br>

    <a href="register.html">Belum punya Akun? Daftar Sekarang</a>
    </div>
</body>
</html>
    
