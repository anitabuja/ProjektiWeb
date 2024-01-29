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


<!-- <div class="login_page">
    <div class="login_page_banner">
        <img src="./img/login.jpg" alt=" Login image">
    </div>
    <div class="wrapper">
        <div class="login_box">


            <form class="login_form" method="post" name="form" onsubmit="return validated()">

                <div class="input_wrapper">
                    <h4>Email</h4>
                    <input autocomplete="off" type="email" name="email">
                    <div id="email_error_login">Please fill up your Email</div>
                </div>
                <div class="input_wrapper">
                    <h4>Password</h4>
                    <input type="password" name="password">
                    <div id="pass_error_login">Please fill up your Password</div>
                </div>

                <button type="submit" class="login_btn">Login</button>
                <div class="container signin">
                    <p>Don't have an account? <a href="./register.php">Register</a>.</p>
                </div>

            </form>


        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
</body>

</html> -->