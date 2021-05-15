<?php
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM user";
$query = mysqli_query($db, $sql);
$cek=mysqli_num_rows($query);
$a=mysqli_fetch_array($query);

if($cek>0){
$_SESSION['username']=$a['username'];
header('location:home.php');
}
else { 
setcookie("message","username atau pasword salah",time()+3600);
header('location:index.php');
}
?>