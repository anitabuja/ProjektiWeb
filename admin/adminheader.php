<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0 (1)/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Store Web</title>
</head>

<body>

    <nav class="underline_nav">
        <input id="nav-toggle" type="checkbox">
        <a href="index.html">
            <div class="logo">
                <img src="img/logoa-removebg-preview.png" alt="Apple logo">
            </div>
        </a>
        <ul class="links">
            <li><a class="active" href="all_products.php">All Products</a></li>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="contactadmin.php">All contacts</a></li>

            <?php
                
                if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
                    echo '<li><a href="logout_admin.php">Logout</a></li>';
                }
                ?>
        </ul>


        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var links = document.querySelectorAll('.links a');

        links.forEach(function (link) {
            link.addEventListener('click', function () {
                // Remove 'active' class from all links
                links.forEach(function (otherLink) {
                    otherLink.classList.remove('active');
                });

                // Add 'active' class to the clicked link
                link.classList.add('active');
            });
        });
    });
</script>