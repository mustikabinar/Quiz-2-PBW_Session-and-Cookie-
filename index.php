<?php
session_start();
if(isset($_SESSION['username'])){
header('location:home.php');
}
?>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran akun baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    if(isset($_COOKIE['message'])){
    echo $_COOKIE['message'];
    }
?>
    <p>Mustika Binar Bestari | 192410101131</p>
    <p>Pemrograman Berbasis Web A</p>

    <form method="post" action="login.php">
    <table border="1" cellpadding="3" cellspacing="3" align="center">
        <tr>
        <td align="center" colspan="3">Halaman Login</td>
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

        <td><input type="submit" name="submit" value="Login" /> <input type="reset" name="reset" /></td>
        </tr>
    </table>
    </form>

    <p><center>Belum punya akun? <a href="registrasi.php">Daftar</a></center></p> 
</body>
</html>