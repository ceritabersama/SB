<?php 
    session_start();

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
    }
?><!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cerita Bersama Bintang</title>
    <link rel="icon" href="favicon.png" type="image/png">
</head>
<body>
    <?php include "Layout/header.html" ?>

    <h3>Selamat Datang di Cerita Bersama Bintang <?= $_SESSION["username"] ?></h3>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php include "Layout/footer.html" ?>
</body>
</html>