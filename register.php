<?php 
    include "service/database.php";
    session_start();

    $register_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $hash_password = hash("sha256", $password);

        try {
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hash_password')";

        if($db->query($sql)) {
            $register_message = "daftar akun berhasil, silahkan login";
        }else {
            $register_message = "daftar akun gagal, silahkan coba lagi";
        }

        }catch (mysqli_sql_exception) {
            $register_message = "username sudah digunakan";
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
            <h3>DAFTAR AKUN</h3>
            <i><?= $register_message ?></i>

            <form action="register.php" method="POST">
                <div>
                    <h4>Masukan Username  <input type="text" placeholder="username" name="username"/></h4>               
                </div>
                <div>
                    <h4>Masukan Password  <input type="password" placeholder="password" name="password"/><br></h4>
                </div>
                
                <button type="submit" name="register">daftar sekarang</button>
            </form>
        </div>
        <hr>
            <i style="margin-left: 8rem;">dibuat oleh @MochammadIrvanWijaya</i>
    </header>
</body>
</html>