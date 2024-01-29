
<?php
session_start();
include '../db_connection.php';

if (isset($_POST['update'])) {
    $productid = $_POST['post_id'];
    $titulli = $_POST['titulli'];
    $qmimi = $_POST['qmimi'];
    $ngjyra = $_POST['ngjyra'];
    $applecase = $_POST['applecase'];
    $smartcase = $_POST['smartcase'];


    if ($_FILES['image']['name']) {
        $image_path = "uploads/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    } else {
      
        $image_path = $_POST['image_path'];
    }

    $update_query = "UPDATE produktet SET titulli='$titulli', qmimi='$qmimi', ngjyra='$ngjyra', 
                    applecase='$applecase', smartcase='$smartcase', image='$image_path' 
                    WHERE id='$productid'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


?>
