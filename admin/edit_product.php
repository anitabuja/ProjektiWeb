<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

<div class="container">
    <h2>Edit Product</h2>

    <?php
    // Assuming you have the product ID passed to this page as a parameter (e.g., edit.php?id=123)
    $productid = isset($_GET['id']) ? $_GET['id'] : '';

    // Fetch the product details from the database based on the ID
    include '../db_connection.php';
    $query = "SELECT * FROM produktet WHERE id='$productid'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);
    ?>

    <form action="process_form.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
        <label for="titulli">Title:</label>
        <input type="text" name="titulli" value="<?php echo $row['titulli']; ?>" placeholder="Product title" required>
        
        <label for="qmimi">Price:</label>
        <input type="text" name="qmimi" value="<?php echo $row['qmimi']; ?>" placeholder="Product price" required>
        
        <label for="ngjyra">Color:</label>
        <input type="text" name="ngjyra" value="<?php echo $row['ngjyra']; ?>" placeholder="Product color" required>
        
        <label for="applecase">Apple Case:</label>
        <input type="text" name="applecase" value="<?php echo $row['applecase']; ?>" placeholder="Apple Case" required>
        
        <label for="smartcase">Smart Case:</label>
        <input type="text" name="smartcase" value="<?php echo $row['smartcase']; ?>" placeholder="Smart Case" required>
        
   
       <input type="hidden" name="image_path" value="<?php echo $row['image']; ?>">

        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*">
        
        <input type="submit" class="submit_button" name="update" value="Update">
    </form>

    <?php
    } else {
    ?>
    <h4>No data found for the given ID</h4>
    <?php
    }
    ?>
</div>

</body>
</html>
