<!-- process_form.php -->
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

    // Process the file upload if a new image is selected
    if ($_FILES['image']['name']) {
        $image_path = "uploads/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    } else {
        // If no new image is selected, keep the existing image path
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

// Add any other necessary code (e.g., closing database connection) here
?>
