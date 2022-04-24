<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>login</title>
</head>
<body>
<form method="POST">
<div class="container">
          <h1>Login</h1>
            <form method="POST" action="../index_admin.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button>Log In</button>
            </form>
        </div>
	<script type="text/javascript">
function tekan(){
	alert("Login Berhasil");
}
	</script>
	</form>
</body>
<?php
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_login
                        WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($connect, $query_sql);

if(mysqli_num_rows($result) > 0){
      echo "<h1>Selamat Datang, ".$username."!</h1>";
}else{
      echo "<h2>Username atau Password Salah!</h2>";
}
?>
</html>

