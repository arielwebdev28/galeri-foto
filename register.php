<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
    .container{
        margin-top: 100px;
    }
    .kotak{
        width: 360px;
        height: 680px;
        background-color: white;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }
</style>
<body class="bg-dark ">
    <div class="container w-25 opacity-75">
        <div class="card kotak p-2">
            <h1 class="text-center">Registrasi</h1>
            <p class="text-center">
                Silahkan Registrasi untuk login
            </p>
            <form action="register.php" method="post">
                <label for="username" class="h3">Username</label>
                <input type="text" name="username" class="form-control" placeholder="//">
                <br>
                <label for="password" class="h3">Password</label>
                <input type="password" name="password" class="form-control" placeholder="//">
                <br>
                <label for="email" class="h3">Email</label>
                <input type="text" name="email" class="form-control" placeholder="//">
                <br>
                <label for="namalengkap" class="h3">Nama Lengkap</label>
                <input type="text" name="namalengkap" class="form-control" placeholder="//">
                <br>
                <label for="alamat" class="h3">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="//">
                <br>
                <input type="submit" style="margin-right: 186px;" value="Register" class="btn btn-primary" name="submit">
                <a href="index.php" class="btn btn-secondary">Login</a>
            </form>
        </div>
    </div>
</body>
</html>

