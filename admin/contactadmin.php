<?php
session_start();
include '../db_connection.php';
include 'adminheader.php';

// if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
//     header("Location: admin_index.php");
//     exit;
// }

$query = "SELECT * FROM contact";
$result = $conn->query($query); 



if(isset($_POST ['delete_contact'])){
    $contactid = $_POST['delete_contact'];
    $delete_query = "delete from contact where id='$contactid'";
    $query_run = mysqli_query($conn, $delete_query);
}
$conn->close();


?>


<div class="container">


    <table class="all_products_table" id="inventory_edit">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Delete</th>
        </tr>
        <?php

                while ($row = mysqli_fetch_assoc($result)) {
                  
                ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>



            <form id="delete-form" action="" method="post">
                <input type="hidden" name="delete_contact" value="<?php echo $row['id']; ?>">
                <td><button type="submit" class="delete_btn">Delete</button></td>
            </form>

        </tr>

        <?php
                }

                ?>
    </table>

</div>