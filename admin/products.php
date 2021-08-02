<!----------------- HEADER ------------------> 
<?php 
session_start();

if(!(isset($_SESSION["kullanici_id"])))  header('Location: ../giris.php');
include "includes/admin_header.php" ?>  


    <main>
  
        <div class="product-main">
            <h1>Welcome to Admin Page</h1>        
            
            <br>
            <table class="product-table" border ="1">
                <thead class = "thead">             
                    <tr class="table-head-selects">
                        <th>ID</th>
                        <th>Brand Name</th>
                        <th>Category</th>                        
                        <th>Brand Image</th>                   
                        <th>Brand Text</th>
                        <th>Tags</th>
                        <th>Brand Cost</th>  
                        <th colspan= "2">Actions</th>
                                
                                                        
                    </tr>
                </thead>            
                <tbody> 
                    
                    <?php

                    if(isset($_POST["edit_brands"])){
                        $brand_id = $_POST["brand_id"];

                        $edit_brand_name = $_POST["brand_namex"];
                        $edit_brand_category = $_POST["brand_category"];
                        
                        $edit_brand_text = $_POST["brand_text"];
                        $edit_brand_tags = $_POST["brand_tags"];
                        $edit_brand_cost = $_POST["brand_cost"];

                        $edit_brand_image = $_FILES["brand_image"]["name"];
                        $edit_brand_image_temp = $_FILES["brand_image"]["tmp_name"];

                        move_uploaded_file($edit_brand_image_temp, "../images/$edit_brand_image");


                        $sql_query2 = "UPDATE brands SET brand_name = '$edit_brand_name' , brand_category = '$edit_brand_category' , brand_image = '$edit_brand_image' , brand_text = '$edit_brand_text' , brand_tags = '$edit_brand_tags', brand_cost = '$edit_brand_cost'  WHERE brand_id = '$brand_id'";

                        $edit_brand_query = mysqli_query($conn, $sql_query2);
                        header("Location: products.php");





                    }
                    
                    
                    ?>

                    <?php  
                            
                    if(isset($_POST["delete"])){

                        $key = $_POST["keyToDelete"];

                        

                        $sql_query = "DELETE FROM brands WHERE brand_id = {$key}";

                        $delete_brand_query = mysqli_query($conn, $sql_query);
                        header("Location: products.php");

                    }

                    
                    ?>

                    
                        
                    <?php
                    if(isset($_POST["add_brands"])){
                        $brand_name =  $_POST["brand_name"];
                        $brand_category =  $_POST["brand_category"];                    
                        $brand_text =  $_POST["brand_text"];
                        $brand_tags =  $_POST["brand_tags"];
                        $brand_cost =  $_POST["brand_cost"];
                    
                        $brand_image = $_FILES["brand_image"]["name"];
                        $brand_image_temp = $_FILES["brand_image"]["tmp_name"];

                        move_uploaded_file($brand_image_temp, "../images/$brand_image");
                        
                        $query = "INSERT INTO brands (brand_category, brand_name, brand_text, brand_image, brand_tags, brand_cost)";
                        $query .= "VALUES('{$brand_category}','{$brand_name}', '{$brand_text}', '{$brand_image}', '{$brand_tags}', '{$brand_cost}')";

                        $create_brand_query =  mysqli_query($conn, $query);
                        header("Location: products.php");
                    }
                
                    ?> 
              
                    



                    
                    <?php 
                    $sql_query="SELECT * FROM brands ORDER BY brand_id DESC";
                    $select_all_brands = mysqli_query($conn, $sql_query );
                    
                        while($row = mysqli_fetch_assoc($select_all_brands)) {?>
                                                                                   

                            
                            <tr>
                                <form action="" method="post" role="form">
                                    <td><?php echo $row["brand_id"]; ?></td>
                                    <td><?php echo $row["brand_name"]; ?></td>
                                    <td><?php echo $row["brand_category"]; ?></td>
                                    <td><?php echo "<img src='../images/".$row['brand_image']."' height = '170px' width = '110px' >"; ?></td>
                                    <td><?php echo $row["brand_text"]; ?></td>
                                    <td><?php echo $row["brand_tags"]; ?></td>
                                    <td><?php echo $row["brand_cost"]; ?></td>
                                    
                                    <td> 

                                        <input type="checkbox" name="keyToDelete" value="<?php echo $row['brand_id'];?>" required>
                                    
                                    </td>
                                    <td>                           
                                        
                                        <a href="edit.php?ID=<?php echo $row['brand_id'];?>">Değiştir</a>
                                        
                                        <input type="submit" name="delete" value="Delete">
                                            
                                        
                                    
                                    </td>
                                    
                                </form>                                
                            </tr>

                        
                                     
                        
                                           
                                            
                
                            
                        <?php } ?>

                     
                    

        
                        

            
            
        

                    

                </tbody>    
            </table>   
                        
        </div>   

                        
                              
    
    </main>


  
    <!-------------- ASIDE ------------> 
    <?php include "includes/admin_sidebar.php" ?>   


     
   

    
    
    



</body>
</html>