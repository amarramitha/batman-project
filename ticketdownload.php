<?php 
include('function.php');
session_start();

$id = $_SESSION['id_user'];

if(isset($_GET['id'])){
    $id_showroom = $_GET['id'];
}

if(isset($_POST['submit'])){
    $id_showroom = $_POST['id_show'];
    isAgree($id_showroom, $id);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation</title>
    <link rel="stylesheet" href="invitation.css">
</head>

<body>
    <div class="container">
        <div class="image-container" ">
            <img src=" invitation-ticket<?= $id_showroom ?>.png" id="invitationImage">
        </div>
        <form action="" method="post" class="form" onsubmit="downloadImage()">
            <input type="hidden" value="<?= $id_showroom ?>" name="id_show">
            <button id=" downloadButton" type="submit" name="submit">Download</button>
        </form>
    </div>
    <script>
    function downloadImage() {
        // Mendapatkan elemen gambar
        var imgElement = document.getElementById('invitationImage');

        // Membuat elemen <a> untuk menetapkan properti download
        var link = document.createElement('a');
        link.href = imgElement.src;
        link.download = 'invitation-ticket.png';

        // Menyembunyikan elemen <a> dan mengekliknya
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
    </script>
</body>

</html>