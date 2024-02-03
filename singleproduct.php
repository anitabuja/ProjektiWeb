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


    <?php include 'footer.php'; ?>

    <script src="./script/script.js"></script>
</body>

</html>