<?php
include 'header.php';
include 'db_connection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $stmt = mysqli_prepare($conn, "SELECT id, password FROM users WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);



    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['logged_in'] = true;
            // $_SESSION['email'] = $email;
            header("location: store.php");
            exit;
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    } else {
        $error = "Your Login Name or Password is invalid";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

    <section class="Login_section">
        <div class="container">
            <div class="boxes">
                <div class="loginft">
                    <img src="img/pexels-miguel-á-padriñán-2882566 1 (1).png" alt="Login foto">
                </div>
                <div class="box">
                    <h2>Welcome back!</h2>
                    <form method="post" class="loginform" name="form" onsubmit="return validimiLogin()">
                        <input name="email" id="email" type="email" placeholder="Your email" >
                        <input name="password" id="password" type="password" placeholder="Your password">
                        <div class="loginbuton">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>



    <script src="./script/script.js"></script>
</body>

</html>




