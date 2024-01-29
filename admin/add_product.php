<?php 
include '../db_connection.php';
include 'adminheader.php';

// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: admin_index.php");
//     exit;
// }

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

<div class="container">
    <form class="ct_form" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Your Product Name" name="title">
        <input type="number" placeholder="Price" name="qmimi">
        <input type="text" placeholder="Color" name="ngjyra">
        <input type="text" placeholder="Apple Case" name="applecase">
        <input type="text" placeholder="Smart Case" name="smartcase">
        <input type="file" name="image">
        <div class="ctformbutton">
            <button name="add_product" type="submit">Add Product</button>
        </div>
    </form>
</div>

</body>

</html>