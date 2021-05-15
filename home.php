<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1 align="center">Selamat Datang!</h1>
    <br/>
    <h2><a href="logout.php"><center>Logout</center></a></h2>  
</body>
</html>