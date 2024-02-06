<?php
include 'header.php';
include 'db_connection.php';
$query = "SELECT * FROM produktet ORDER BY id desc limit 3 ";
$result = $conn->query($query);
 
 if(isset($_POST['submit_contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $query = mysqli_query($conn, "INSERT INTO contact (name, email, subject, message) 
    VALUES ('$name', '$email', '$subject', '$message')");
    }

 
?>


   

    <section class="Homesection">
        <div class="container">
            <div class="homee">
                <div class="homecontent">  
                 <h2>Dynamic Island. For when things just pop up.</h2>
                 <p>Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else. You can track your next ride, see who’s calling, check your flight status, and so much more.
                 </p>

                 <div class="homebuttons">
                    <a class="Pink"> Learn more ></a>
                    <a class="White"> Shop now ></a>
                 </div>

                </div>

                <div class="homelogo">
                <div class="slider">
                    <div class="singleproduct_ph slide_img">
                        <img src="img/banner_apple 1.png" alt="iphone">
                    </div>
                    <div class="singleproduct_ph slide_img">
                        <img src="img/pinkphone.jpg" alt="iphone">
                    </div>
                    <div class="singleproduct_ph slide_img">
                        <img src="img/nikewatch.png" alt="iphone">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                </div>
                
                
            </div>
            
        </div>
    </section>

    <section class="homesection2">
        <div class="homebanner">
           <p>Award‑winning movies. Binge‑worthy shows. Your favorite music mastered in Spatial Audio. The most epic collection of mobile games. And the world’s 
            largest library of 4K Ultra HD fitness content. The best entertainment and experiences live here — only on Apple.</p>
        </div>
    </section>

    <section class="productssection">
        <div class="container">
            <div class="producttitle">
                <h3 class="pinkt">Quick picks. </h3>
                <h3>Dashing through your list.</h3>
            </div>
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

    <section class="absection">
        <div class="container">
            <div class="abcontent">
                <h3 class="abcon">Only at Apple.</h3>
                <h3>The perfect place to enjoy the holidays.</h3>
            </div>
            <div class="abboxes">
                <div class="abbox">
                     <img src="img/icons/1-removebg-preview 1.png" alt="icon">
                      <p>Enjoy two-hour delivery from an Apple Store, free delivery or easy pickup.</p>
                </div>
                <div class="abbox">
                    <img src="img/icons/2-removebg-preview.png" alt="icon">
                    <p>Enjoy two-hour deliver from an Apple Store,free delivery or easy pickup.</p>
                </div>
                <div class="abbox">
                    <img src="img/icons/3-removebg-preview.png" alt="icon">
                    <p>Enjoy two-hour delivery from an Apple Store,free delivery or easy pickup.</p>
                </div>
                <div class="abbox">
                   <img src="img/icons/Screenshot_1-removebg-preview.png" alt="icon">
                   <p>Enjoy two-hour delivery from an Apple Store, free delivery or easy pickup.</p>  
                </div>       
            </div>
        </div>
    </section>

    <section class="applesc">
        <div class="container">
            <div class="applesc_container">
                <h2>Watch Apple Support videos</h2>
                <p>Check out our official YouTube channel to help you get the most from your Apple devices and services.</p>
                <a href="">Visit Apple Support on YouTube</a>
            </div>
            <div class="applesc_photo">
                <img src="img/tile-feature-AppleSupport-YT-promo_wht.image 1 (1).png" alt="photo">
            </div>
        </div>
    </section>

    <section class="contactform">
        <div class="container">
            <div class="contactcc">
                <h3>Don’t be shy just contact us!</h3>
            </div>
            <div class="contact_form_icon">
                <div class="icons">
                    <div class="icon_box">
                       <div class="icon">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                       </div>
                         <div class="icon_info">
                         <h3>Facebook</h3>
                         <a href="#">Facebook page</a>
                       </div>
                    </div>
                    <div class="icon_box">
                        <div class="icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                          <div class="icon_info">
                          <h3>Adress</h3>
                          <a href="#">Facebook page</a>
                        </div>
                     </div>
                     <div class="icon_box">
                        <div class="icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                          <div class="icon_info">
                          <h3>Instagram</h3>
                          <a href="#">Facebook page</a>
                        </div>
                     </div>
                     <div class="icon_box">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                    
                        </div>
                          <div class="icon_info">
                          <h3>Email</h3>
                          <a href="#">Facebook page</a>
                        </div>
                     </div>
                    

                </div>
           
                <form class="ct_form" method="post">
                        <input type="text" placeholder="Your Name" name = 'name'>
                        <input type="email" placeholder="Your Email" name = 'email'>
                        <input type="text" placeholder="Subject" name = 'subject'>
                       <textarea  placeholder="Your Message..." cols="10" rows="5" name="message"></textarea>
                       <div class="ctformbutton">
                       <button name="submit_contact" type="submit">Send</button>
                       </div> 
                    </form>  
                
        </div>
    </section>
   <script src= "./script/script.js"></script>
   <?php 
   include 'footer.php';
   
   ?>