<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    session_start();
    if (!$_SESSION['user_login']) {
        header("Location: login.php");
    }       
    
    $user = $_SESSION['user_login'];
    ?>

    <h2>Hallo, <?php echo $user['nama']; ?></h2>    
    <h2>Email : <?php echo $user['email']; ?></h2>

    <h3>Silahkan tekan tombol ini jika ingin logout</h3>
    <a href="logout.php"><button>Logout</button></a>
    
</body>
</html>