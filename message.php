<?php
include('function.php');
session_start();
$id = $_SESSION['id_user'];
$result = inviteList($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Message</title>
    <link rel="stylesheet" href="message.css" />
</head>

<body>
    <div class="message-container">
        <div id="logo">
            <img src="batman.png" />
            <h2>Message</h2>
        </div>
        <div class="isi-message">
            <?php 
            foreach($result as $row){
          ?>
            <a href="ticketdownload.php?id=<?= $row['admin_id'] ?>">Showroom <?= $row['admin_id'] ?> sent you an
                invitation!</a>
            <?php 
            }
            ?>
            <a href="profile.php">Back to Profile</a>
        </div>
    </div>
</body>

</html>