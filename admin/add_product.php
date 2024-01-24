<?php 
include '../db_connection.php';
include 'adminheader.php';

if(isset($_POST['add_product'])){
    $title = $_POST['title'];
    $qmimi = $_POST['qmimi'];
    $ngjyra = $_POST['ngjyra'];
    $applecase = $_POST['applecase'];
    $smartcase = $_POST['smartcase'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./images/" . $filename;

    // Move the uploaded image to the specified directory
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>Image uploaded successfully!</h3>";

    $query = mysqli_query($conn, "INSERT INTO produktet (titulli, ngjyra, qmimi, applecase, smartcase, image) 
    VALUES ('$title', '$ngjyra', '$qmimi', '$applecase', '$smartcase', '$filename')");
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="ct_form" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Your Product Name" name="title">
    <input type="number" placeholder="qmimi" name="qmimi">
    <input type="text" placeholder="ngjyra" name="ngjyra">
    <input type="text" placeholder="applecase" name="applecase">
    <input type="text" placeholder="smartcase" name="smartcase">
    <input type="file" name="image">
    <div class="ctformbutton">
    <button name="add_product" type="submit">Send</button>
    </div> 
</form>  
</body>
</html>
