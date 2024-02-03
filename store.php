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

    <?php include 'footer.php'; ?>

</body>