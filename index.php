<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>
    <style>
        body{
            width: 100%;
            height: 79vh;
        }
        .container{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10%;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        .container .card{
            width: 400px;
            height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            opacity: 78%;
        }
    </style>
    <body class="bg-dark">
        <div class="container w-25 p-3">
            <div class="card bg-white w-100">
                <h1>LOGIN</h1>
                <p>Silahkan Login untuk memasuki website</p>
                <form action="index.php"method="post" name="login">
                    <label for="username" class="h2">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="//">
                    <br>
                    <label for="password" class="h2">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="//">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    <p>
                        <br>
                        Buat akun <a href="register.php">Di Sini</a>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>

    <?php
	    if(isset($_POST['submit'])){
    	session_start();
    	include 'koneksi.php';
    	$user = mysqli_real_escape_string($conn, $_POST['username']);
    	$pass = mysqli_real_escape_string($conn, $_POST['password']);
    	$cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$user."'AND password = '".$pass."'");
    	if(mysqli_num_rows($cek) > 0){
    	$d = mysqli_fetch_object($cek);
    	$_SESSION['status_login'] = true;
    	$_SESSION['a_global'] = $d;
    	$_SESSION['id'] = $d->admin_id;
    	echo '<script>window.location="gallery.php"</script>';
    	}else{
    		echo '<script>alert("Username atau password anda salah")</script>';
    	}
        }
    ?>
</body>
</html>