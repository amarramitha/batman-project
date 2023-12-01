<?php 
include('function.php');
session_start();
$id = $_SESSION['id_user'];
$result = display($id);

if(isset($_POST['submit'])){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $bio = $_POST['bio'];
  updateProfile($id, $name, $email, $bio);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="editprofile.css" />
</head>

<body>
    <div class="profile-container">
        <div id="logo">
            <img src="batman.png" />
            <h2>Edit Profile</h2>
        </div>
        <div class="edit-container">
            <form action="" name="edit-form" method="POST" class="edit-form">
                <table>
                    <tr>
                        <td id="kolom1">Username</td>
                        <td><input type="text" name="username"
                                value="<?= $result['username'] ? $result['username'] : '' ?> " /></td>
                    </tr>
                    <tr>
                        <td id="kolom1">E-Mail</td>
                        <td><input type="email" name="email" value="<?= $result['email'] ? $result['email'] : '' ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td id="kolom1">Bio</td>
                        <td><input type="text" name="bio" value="<?= $result['bio'] ? $result['bio'] : '' ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="profile.php" class="cancel">Cancel</a>
                            <input type="submit" name="submit" value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>