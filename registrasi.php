<?php
    include ('koneksi.php');

    if(isset($_POST['registrasi'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password) VALUE ('$username', '$password')";
    $query = mysqli_query($db, $sql);

    if ( $query ) {
        header('Location: index.php?status=sukses');
    }
    else {
        header('Location: index.php?status=gagal');
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
    <table border="1" cellpadding="3" cellspacing="3" align="center">
        <tr>
        <td align="center" colspan="3">Halaman Registrasi</td>
        </tr>
        <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" /></td>
        </tr>
        <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" /></td>
        </tr>
        <tr>
        <td colspan="2"></td>

        <td><input type="submit" name="registrasi" value="Create" /> <input type="reset" name="reset" /></td>
        </tr>
    </table>
    </form>

    <p><center>Sudah punya akun? <a href="index.php">Masuk</a></center></p> 
</body>
</html>