<?php 
function validateAdmin($username, $password){
    include('config.php');
    $check = mysqli_query($conn, "SELECT * FROM administration WHERE username = '$username'");
    if(mysqli_num_rows($check) > 0){
        $check = mysqli_fetch_assoc($check);
        if($username == $check['username'] && $password == $check['password']){
          session_start();
          $_SESSION['admin'] = $username;
          $_SESSION['id'] = $check['id'];
          header("Location: userlist.php");
        }  
    }
}
function validateUser($username, $password){
    include('config.php');
    $check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($check) > 0){
        $check = mysqli_fetch_assoc($check);
        if($username == $check['username'] && $password == $check['password']){
          session_start();
          $_SESSION['user_name'] = $username;
          $_SESSION['id_user'] = $check['id'];
          header("Location: profile.php");
        }  
    }
}

function updateProfile($id, $name, $email, $bio){
    include('config.php');
    $query = "UPDATE user SET username = '$name', email = '$email', bio = '$bio' WHERE id = $id";
    mysqli_query($conn,$query);
    header("Location: profile.php");
}

function userList(){
    include('config.php');
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn,$query);
    return $result;
}
function display($id){
    include('config.php');
    $query = "SELECT * FROM user where id = $id";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
    return $result;
}

function inviteUser($user_id, $admin_id){
    include('config.php');
    $check = mysqli_query($conn,"SELECT * FROM showroom where admin_id = $admin_id AND user_id = $user_id");
    if (mysqli_num_rows($check) == 0){
        $query = "INSERT INTO showroom values($user_id, $admin_id)";
        mysqli_query($conn,$query);
    }
    header("Location: userlist.php");
}

function inviteList($id){
    include('config.php');
    $query = "SELECT * FROM showroom where user_id = $id";
    $result = mysqli_query($conn,$query);
    return $result;
}

function isAgree($id_showroom, $id){
    include('config.php');
    $query = "DELETE FROM showroom WHERE admin_id = $id_showroom AND user_id = $id";
    mysqli_query($conn, $query);
    header("Location: message.php");
}

function hasInvite($id){
    include('config.php');
    $query = "SELECT * FROM showroom where admin_id = $id";
    $result = mysqli_query($conn,$query);
    return $result;
}