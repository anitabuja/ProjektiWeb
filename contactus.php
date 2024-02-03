<?php 
 include 'header.php';
 include 'db_connection.php';


 if(isset($_POST['submit_contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $query = mysqli_query($conn, "INSERT INTO contact (name, email, subject, message) 
    VALUES ('$name', '$email', '$subject', '$message')");
    }

 
?>



        <section class="contactform">
            <div class="contactusbanner">
                   
            </div>
            <div class="container">
                
               
                
                <fieldset>
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
                
        </section> 
      



        <?php include 'footer.php'; ?>
</html>