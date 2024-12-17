<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">
</head>

<?php 
    include "service/database.php";
    session_start();

    $register_message = "";

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
    }

    if (isset($_POST['register'])) { 
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hash_password = hash("sha256", $password);

        try {
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$hash_password')";

            if($db->query($sql)) {
               $register_message = "Daftar akun berhasil, silakan login";
            }else {
               $register_message = "Daftar akun gagal, silakan coba lagi";
            }
        }catch (mysqli_sql_exception $e) {
            $register_message = "username sudah digunakan, silakan ganti yang lain";
        }
        $db->close();
 
    }


?>

<body>
    <?php include "Layout/header.html" ?>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.login-container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

h3 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

input[type="text"], input[type="password"] {
    width: 50%;
    padding: 10px;
    margin: 10px auto;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button[type="submit"] {
    width: 50%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.error-message {
    color: #e63946;
    font-size: 14px;
    margin-bottom: 10px;
}
 </style>  
    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Daftar Sekarang</button> 
    </form>
    <?php include "Layout/footer.html" ?>
</body>
</html>