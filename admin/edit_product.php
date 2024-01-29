

<div class="container">
    <h2>Edit Product</h2>

    <?php
    include 'adminheader.php';
    $productid = isset($_GET['id']) ? $_GET['id'] : '';

    // if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    //     header("Location: admin_index.php");
    //     exit;
    // }

   
    include '../db_connection.php';
    $query = "SELECT * FROM produktet WHERE id='$productid'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_array($query_run);
    ?>

    <form  id="edit_form" class="ct_form" action="" method="post" enctype="multipart/form-data">
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

<script>

    $(document).ready(function() {
    $('#edit_form').on('submit',function(){
        // Add text 'loading...' right after clicking on the submit button. 
        $('.output_message').text('Loading...'); 

        var form = $(this);
        $.ajax({
            url: 'process_form.php',
            method: form.attr('method'),
            data: form.serialize(),
            dataType: 'json', // specify the data type as JSON
            success: function(response){
                if (response.status == 'success'){
                    $('.output_message').text(response.message);
                }
                else{
                    $('.output_message').text("Product edited successfully");
                }
            },
            error: function(xhr, textStatus, errorThrown){
                $('.output_message').text('An error occurred while submitting the form: ' + errorThrown);
            }
        });

        // Prevents default submission of the form after clicking on the submit button. 
        return false;
    });
});
</script>

</body>
</html>
