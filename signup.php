<?php 
include('config.php');
include('function.php');

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    if($password == $confirmPassword){
        mysqli_query($conn, "INSERT INTO user (username, password, email) values('$name','$password', '$email')");
        echo "<script>
        alert('Register Berhasil');
        </script>";
        header('Location: login.php');
    }
    echo "<script>
    alert('Register Gagal');
    </script>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="Rectangle 2.png">
        </div>
        <div class="signup-container">
            <div class="signup-form">
                <img src="batman.png" id="logo">
                <form name="signup-form" action="" method="POST" class="signup-form">
                    <h2>Sign Up</h2>
                    <span>Username</span>
                    <input type="text" name="username" required>
                    <span>E-Mail</span>
                    <input type="email" name="email" required>
                    <span>Password</span>
                    <input type="password" name="password" required>
                    <span>Confirm Password</span>
                    <input type="password" name="confirmpassword" required>

                    <br><input type="submit" name="submit" value="Sign Up">
                </form>
                <div id="have-account">
                    <span id="have-account">Have an account? <a href="login.php"> Log In</a></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>