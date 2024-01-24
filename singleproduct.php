<?php 
 include 'header.php';
 include 'db_connection.php';

 $post_id = $_GET['id'];

 $sql = "SELECT * FROM produktet WHERE id=$post_id";
 $result = mysqli_query($conn, $sql);

?>


    <section class="singleproduct_section">
        <div class="container">
        <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="singleproduct_stuf">
                <div class="slider">
                    <div class="singleproduct_ph slide_img">
                        <img src="./admin/images/<?php echo $row['image'];?>" alt="iphone">
                    </div>
                    
                </div>





                <div class="singleproductconbox">
                    <div class="singlecon">
                        <h1><?php echo $row['titulli'];?></h1>
                    </div>

                    <div class="singleproduct_con">
                        <p class="sncon">Price</p>
                        <span class="spcon"><?php echo $row['qmimi'];?>€</span>
                        
                    </div>
                    <hr>

                    <div class="singleproduct_con">
                        <p class="sncon">Color</p>
                        <span class="spcon"><?php echo $row['ngjyra'];?></span>

                    </div>
                    <hr>

                    <div class="singleproduct_con">
                        <p class="sncon">Apple Case</p>
                        <span class="spcon"><?php echo $row['applecase'];?></span>

                    </div>
                    <hr>

                    <div class="singleproduct_con">
                        <p class="sncon">Smart Case</p>
                        <span class="spcon"><?php echo $row['smartcase'];?></span>
                    </div>
                    <hr>

                    <div class="singleproduct_button">
                        <a class="Pink">Buy now</a>
                    </div>
                </div>




            </div>
            <?php }
    } ?>
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