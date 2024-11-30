<?php
    include "service/database.php";
    session_start();

    $login_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash_password = hash("sha256", $password);

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$hash_password'
        ";

        $result = $db->query($sql);

        if($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
            
            header("location: dashboard.php");

        }else {
            $login_message = "akun tidak ditemukan";
        }
        $db->close();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body style="background-color: rgb(0, 248, 74);">
    <header class="halaman">
        <h1 style="text-align: center;">Selamat datang di APDIS </h1>
        <div class="login">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <h3>MASUKAN AKUN</h3>
            <i><?= $login_message ?></i>

            <form action="login.php" method="POST">
                <div>
                    <h4>Masukan Username  <input type="text" placeholder="username" name="username"/></h4>               
                </div>
                <div>
                    <h4>Masukan Password  <input type="password" placeholder="password" name="password"/><br></h4>
                </div>
                
                <button type="submit" name="login">masuk sekarang</button>
            </form>
        </div>
        <hr>
            <i style="margin-left: 8rem;">dibuat oleh @MochammadIrvanWijaya</i>
    </header>
</body>
</html>