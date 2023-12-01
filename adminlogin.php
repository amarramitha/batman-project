<?php 
include('config.php');
include('function.php');

if(isset($_POST['login'])){
  $username = $_POST['user'];
  $password = $_POST['password'];
  validateAdmin($username, $password);
  echo "<script>
      alert('Login Gagal');
      </script>";
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="Rectangle 1.png" />
        </div>
        <div class="login-container">
            <div class="login-form">
                <img src="batman.png" id="logo" />
                <form action="adminlogin.php" method="POST" class="login-form">
                    <h2>Admin Log In</h2>
                    <span>Username</span>
                    <input type="text" name="user" placeholder="Username" required />
                    <span>Password</span>
                    <input type="password" name="password" placeholder="Password" required />
                    <br /><input type="submit" name="login" value="Login" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>