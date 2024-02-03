

<div class="container">
    <h2>Edit Product</h2>

    <?php
    include 'adminheader.php';
    $productid = isset($_GET['id']) ? $_GET['id'] : '';

    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: admin_index.php");
        exit;
    }

   
    include '../db_connection.php';
    $query = "SELECT * FROM produktet WHERE id='$productid'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);
    ?>

    <form  id="edit_form" class="ct_form" action="process_form.php" method="post" enctype="multipart/form-data">
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
        <span class="output_message"></span>
            <span class="output_message_error"></span>
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
