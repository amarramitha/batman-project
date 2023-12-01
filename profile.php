<?php 
include('function.php');
session_start();
$id = $_SESSION['id_user'];
$result = display($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css" />
</head>

<body>
    <div class="profile-container">
        <div id="logo">
            <img src="batman.png" />
            <h2>Profile</h2>
            <a href="message.php"><img name="logo-message" src="messeage2.png" /></a>
        </div>
        <div class="isi-container">
            <div class="user-profile">
                <span><?= $result['username'] ?></span>
                <span><?= $result['email'] ?></span>
                <?php 
                  if($result['bio'] != null){
                  ?>
                <span><?= $result['bio'] ?></span>
                <?php } else { ?>
                <span>You have no bio yet.</span>
                <?php } ?>
                <a class="editBtn" href="editprofile.php">Edit Profile</a>
                <a class="editBtn" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>