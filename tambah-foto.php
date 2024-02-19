<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Foto</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
    .container{
        margin-top: 31px;
    }
    .kotak{
        width: 400px;
        height: 880px;
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
            <h1 class="text-center">Tambah Data</h1>
            <p class="text-center">
                Tambah Data Baru
            </p>
            <form action="tambah-foto.php" method="post">
                <label for="fotoid" class="h3">FotoID</label>
                <input type="text" name="fotoid" class="form-control" placeholder="//">
                <br>
                <label for="judulfoto" class="h3">Judul Foto</label>
                <input type="password" name="judulfoto" class="form-control" placeholder="//">
                <br>
                <label for="deskripsifoto" class="h3">Deskripsi Foto</label>
                <input type="text" name="deskripsifoto" class="form-control" placeholder="//">
                <br>
                <label for="tanggalunggah" class="h3">Tanggal Unggah</label>
                <input type="text" name="tanggalunggah" class="form-control" placeholder="//">
                <br>
                <label for="lokasifile" class="h3">Lokasi File</label>
                <input type="text" name="lokasifile" class="form-control" placeholder="//">
                <br>
                <label for="albumid" class="h3">Album ID</label>
                <input type="text" name="albumid" class="form-control" placeholder="//">
                <br>
                <label for="userid" class="h3">User ID</label>
                <input type="text" name="userid" class="form-control" placeholder="//">
                <br>
                <input type="submit" style="margin-right: 186px;" value="Tambah Data Baru" class="btn btn-primary" name="submit">
            </form>
        </div>
    </div>
</body>
</html>

