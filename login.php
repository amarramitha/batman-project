<?php 
include('function.php');
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  validateUser($username, $password);
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
                <form name="login-form" action="login.php" method="POST" class="login-form">
                    <h2>Log In</h2>
                    <span>Username</span>
                    <input type="text" name="username" placeholder="Username" required />
                    <span>Password</span>
                    <input type="password" name="password" placeholder="Password" required />
                    <br /><input type="submit" name="submit" value="Login" />
                </form>
                <div id="register">
                    <span id="register">Don't have an account? <a href="signup.php"> Sign Up</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>