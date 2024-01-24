<?php 
 include 'header.php';
 include 'db_connection.php';
 session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $stmt = mysqli_prepare($conn, "SELECT id, password FROM useri WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);



    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['logged_in'] = true;
          
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
                    <form method="post" class="loginform" onsubmit="return validimiLogin()">
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

    <section class="footer_section">
        <div class="container">
            <div class="fcontent">
                <h2>NEWSLETTER</h2>
                <form class="newsletter_form">
                    <input type="text" placeholder="Your email">
                    <button class="end-btn"><i class="fa fa-chevron-right"></i></button>
                </form>
            </div>
        </div>
        <div class="navigation">

            <ul>

                <li>
                    <a  href="#">
                        Home
                    </a>
                </li>

                <li>
                    <a href="store.html">
                        Store
                    </a>
                </li>

                <li>
                    <a href="#">
                        About us
                    </a>
                </li>

                <li>
                    <a href="#">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a href="#">
                        Register
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        Login
                    </a>
            </ul>
        </div>


        </div>

        <div class="footeric">
            <div class="footericon">
                <a href="www.facebook.com">
                    <img src="img/facebook.png" alt="facebook">
                </a>
            </div>
            <div class="footericon">
                <a href="www.twwiter.com">
                    <img src="img/Path.png" alt="twwiter">
                </a>
            </div>
            <div class="footericon">
                <a href="www.youtube.com">
                    <img src="img/Shape.png" alt="youtube">
                </a>
            </div>
        </div>

        <div class="footerc">
            <p>© Copyright 2023 - <Label> Apple Store</Label></p>
        </div>
        </div>
    </section>



    <script src="./script/script.js"></script>
</body>

</html>