<?php
include 'db_connection.php';

if (isset($_POST['register_buton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmpass = $_POST['password_confirm'];

    if ($password === $confirmpass) {
        $name = mysqli_real_escape_string($conn, $name);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $password = mysqli_real_escape_string($conn, $password);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO useri (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hashed_password')";
        $stmt = mysqli_prepare($conn, $query);
        if (!$stmt) {
            die('Error: ' . mysqli_error($conn));
        }
        if (mysqli_stmt_execute($stmt)) {
            header("location: login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Password and Confirm Password do not match";
    }
    mysqli_close($conn);
}
?>