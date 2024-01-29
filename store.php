<?php 
 include 'header.php';
 include 'db_connection.php';

 $query = "SELECT * FROM produktet ORDER BY id desc" ;
 $result = $conn->query($query); 

 if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}



?>


    <section class="productssection">
        <div class="storebanner">

        </div>
        <div class="container">

            <div class="productboxes">
            <?php 

             while($rows=mysqli_fetch_assoc($result)){
             ?>
                <div class="productbox">
              
                    <a href="singleproduct.php?id=<?php echo $rows['id'];?>">
                        <img src="./admin/images/<?php echo $rows["image"]; ?>" alt="iphone photo">
                        <p class="pinkp">Free Engraving</p>
                        <p class="prodsn"><?php echo $rows["titulli"]; ?></p>
                        <p class="price"><?php echo $rows["qmimi"]; ?>€</p>
                        
                    </a>

                   

                </div>
                <?php 
               }

                ?>
              
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

</body>