

<!-- HEADER --> 
<?php include "includes/header.php" ?>




<!-- NAVIGATION --> 
<?php include "includes/navigation.php" ?>




    <main class="child">
        
        <div class="adv_center" >   

            <?php

            $sql_query = "SELECT * FROM brands";
            $select_all_brands = mysqli_query($conn, $sql_query);

            while($row = mysqli_fetch_assoc($select_all_brands)){
                $brand_name = $row["brand_name"];
                $brand_text = $row["brand_text"];
                $brand_cost = $row["brand_cost"];
                $brand_image = $row["brand_image"];
                $brand_tags = $row["brand_tags"];
            
            ?>        


            <div class="adv"> 
                <img src="images/<?php echo $brand_image; ?> " alt="" >
                <span> <?php echo $brand_name; ?> </span> <p> <?php echo $brand_text; ?></p>
                <br>
                <p class = "color"><?php echo $brand_cost; ?> TL</p>
                    
                    

            </div>
                   
            <?php  } ?>


            

            
                      


            

        </div>     
        
    
      
        


    </main>


    
    <!-------------- ASIDE ------------> 
    <?php include "includes/aside.php" ?>



    <footer>

    </footer>
</body>
</html>