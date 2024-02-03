<?php
include 'adminheader.php';
include '../db_connection.php';


if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_index.php");
    exit;
}

$query = "SELECT * FROM produktet";
$result = $conn->query($query); 

if(isset($_POST ['delete_product'])){
    $productid = $_POST['delete_product'];
    $delete_query = "delete from produktet where id='$productid'";
    $query_run = mysqli_query($conn, $delete_query);
}

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<div class="container">


    <table class="all_products_table" id="inventory_edit">

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Qmimi</th>
            <th>Ngjyra</th>
            <th>Smartcase</th>
            <th>Applecase</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php

                while ($row = mysqli_fetch_assoc($result)) {
                    $imageName = $row['image'];
                    $imagePath = "./images/" . $imageName;
                ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['titulli']; ?></td>
            <td><?php echo $row['qmimi']; ?>€ </td>
            <td><?php echo $row['ngjyra']; ?></td>
            <td><?php echo $row['applecase']; ?></td>
            <td><?php echo $row['smartcase']; ?></td>
            <td class="image_table">

                <img src="<?php echo $imagePath; ?>" alt="" />

            </td>
            <td><button type="button"
                    onclick="window.location= 'http://localhost:8008/ProjektiWeb/admin/edit_product.php?id=<?php echo $row['id']; ?>';"
                    class="edit_product">Edit</button></td>
            <form id="delete-form" action="" method="post">
                <input type="hidden" name="delete_product" value="<?php echo $row['id']; ?>">
                <td><button class="delete_btn" type="submit">Delete</button></td>
            </form>

        </tr>

        <?php
                }

                ?>
    </table>

</div>
</div>
</div>

</body>

</html>