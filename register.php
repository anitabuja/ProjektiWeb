1  <?php include 'header.php'; ?>

    <section class="Register_section">
        <div class="container">
            <div class="boxes">
                <div class="registerft">
                    <img src="img/register-now-speech-bubble-banner-with-register-now-text-glassmorphism-style-business-marketing-advertising-vector-isolated-background-eps-10_399089-3544.avif"
                        alt="Login foto">
                </div>
                <div class="registerbox">

                    <h2>Register</h2>
                    <form method="post" action="register_data.php" class="registerform" name="form" onsubmit="return validimiRegister()">
                        <input name="name" id="name" type="text" placeholder="Name"
                            oninput="validateInput('name', nameRegex, 'nameerror')" required>
                        <hr>
                        <div class="inputerror" id="nameerror"></div>
                        <input name="email" id="email" type="text" placeholder="Email"
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

    <?php include 'footer.php'; ?>
    <script src="./script/script.js"></script>


</body>

</html>







