<?php 
 include 'header.php';

?>


    <section class="Register_section">
        <div class="container">
            <div class="boxes">
                <div class="registerft">
                    <img src="img/register-now-speech-bubble-banner-with-register-now-text-glassmorphism-style-business-marketing-advertising-vector-isolated-background-eps-10_399089-3544.avif"
                        alt="Login foto">
                </div>
                <div class="registerbox">

                    <h2>Register</h2>
                    <form method="post" action="register_data.php" class="registerform"  onsubmit="return validimiRegister()">
                        <input name="name" id="name" type="text" placeholder="Name"
                            oninput="validateInput('name', nameRegex, 'nameerror')" required>
                        <hr>
                        <div class="inputerror" id="nameerror"></div>
                        <input name="email" id="email" type="email" placeholder="Email"
                            oninput="validateInput('email', emailRegex, 'emailerror')" required>
                        <hr>
                        <div class="inputerror" id="emailerror"></div>
                        <input name="phone" id="phone" type="tel" placeholder="Phone"
                            oninput="validateInput('phone', phoneRegex, 'phoneerror')" required>
                        <hr>
                        <div class="inputerror" id="phoneerror"></div>
                        <input name="password" id="password" type="password" placeholder="Password"
                            oninput="validateInput('password', passwordRegex, 'passworderror')" required>
                        <hr>
                        <div class="inputerror" id="passworderror"></div>

                        <input name="password_confirm" id="confirm_password" type="password" placeholder="Confirm Password">
                        <hr>
                        <div id="confirmPass_error">Please check your password again</div>
                  
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>


                    <div class="loginbuton">
                        <button name="register_buton" type="submit">Register</button>
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
                    <a class="active" href="#">
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
