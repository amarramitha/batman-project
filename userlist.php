<?php 
include('function.php');
session_start();

$admin = $_SESSION['id'];
$result = userList();

$check = hasInvite($admin);

$isInvited = false;

if(isset($_POST['invite'])){
    $users = $_POST['users'];
    foreach($users as $user){
        inviteUser($user, $admin);
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="list.css">
</head>

<body>
    <div class="container">
        <div id="logo">
            <img src="batman.png">
            <h2>User List</h2>
        </div>
        <form action="userlist.php" method="post">
            <div class="list-container">
                <table border="1">
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                    <?php foreach($result as $row) {
                        ?>
                    <tr>
                        <?php 
                            foreach($check as $check_row){       
                                if($row['id'] == $check_row['user_id']){  ?>
                        <td><?= $row['email']; ?> Has Invited</td>
                        <?php 
                            $isInvited = TRUE;
                            }
                        }
                        if(!$isInvited){ ?>
                        <td><input type="checkbox" name="users[]" value="<?= $row['id']; ?>" /><?= $row['email']; ?>
                        </td>
                        <?php 
                        }else{
                            $isInvited = FALSE;
                        }
                        ?>
                        <td><?= $row['username']; ?></td>
                    </tr>
                    <?php
                        } 
                        ?>
                </table>
            </div>
            <button type="submit" name="invite">Send Invite</button>
            <a href="adminLogout.php">Logout</a>
        </form>
    </div>


</body>

</html>