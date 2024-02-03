<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0 (1)/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Store Web</title>
</head>
<body>
    
<nav class="underline_nav">
        <input id="nav-toggle" type="checkbox">
        <a href="index.php">
            <div class="logo">
                <img src="img/logoa-removebg-preview.png" alt="Apple logo">
            </div>
        </a>
        <ul class="links">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <?php
                
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="register.php">Register</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                
            }
            ?>
        </ul>


        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
