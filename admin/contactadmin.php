<?php
session_start();
include '../db_connection.php';
include 'adminheader.php';

$query = "SELECT * FROM contact";
$result = $conn->query($query); 
if(isset($_POST ['delete_contact'])){
    $contactid = $_POST['delete_contact']
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
                        <td><?php echo $row['email']; ?>€   </td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                       
                     
                        
                        <form id="delete-form" action="" method="post">
                            <input type="hidden" name="delete_contact" value="<?php echo $row['id']; ?>">
                            <td class="delete_btn"><button type="submit">Delete</button></td>
                        </form>

                    </tr>

                <?php
                }

                ?>
            </table>

        </div>