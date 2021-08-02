<!----------------- HEADER ------------------> 
<?php
session_start();

if(!(isset($_SESSION["kullanici_id"])))  header('Location: ../giris.php');
 include "includes/admin_header.php" ?>  



    
    


    <main>

        <?php 
        $sql_query="SELECT * FROM brands where brand_id=".$_GET["ID"]." ORDER BY brand_id DESC";
        $select_all_brands = mysqli_query($conn, $sql_query );
        $k=1;                
        while($row = mysqli_fetch_assoc($select_all_brands)) {?>

            <div class="add_product_footer">
                <h1 class="modal-title">Edit Product</h1> 
                <hr>
                <br><br>
                <form action="products.php" method="post" enctype = "multipart/form-data">
                    <div class="form-group">        
                        <label for="brand_name">Brand Name</label>
                        <input value="<?php {echo $row["brand_name"];} ?>" type="text" name="brand_namex" >                        
                    </div>   
                    <br><br>
                    
                    <div class="form-group">
                        <label for="brand_category">Category</label>
                        <input value= " <?php {echo $row["brand_category"];} ?>" type="text" name="brand_category">                        
                    </div>         
                    <br><br>        
                                    
                    <div class="form-group">      
                        <label for="brand_image">Brand Image</label>
                        <input value= " <?php {echo $row["brand_text"];} ?>" type="file"  name="brand_image">                        
                    </div>      

                    <br><br>
                    
                    <div class="form-group">      
                        <label for="brand_text">Brand Text</label>
                        <textarea value= " <?php {echo $row["brand_text"];} ?>" name="brand_text" id="" cols="20" rows="5"></textarea>                        
                    </div>     
                    <br><br> 

                    <div class="form-group">           
                        <label for="brand_tags">Brand Tags</label>
                        <input value= " <?php {echo $row["brand_tags"];} ?>"  type="text"  name="brand_tags">                        
                    </div>        
                    <br><br>

                    <div class="form-group">           
                        <label for="brand_cost">Brand Cost</label>
                        <input value= " <?php {echo $row["brand_cost"];} ?>" type="text" name="brand_cost">
                    </div>
                    <br>
                        
                    <br><br>

                    <input type="hidden" name="brand_id" value="<?php echo $row["brand_id"]; ?>" >                  
                    <button type="submit" name="edit_brands" >Edit Brands</button>
                                        
                </form>       
            </div>
        
        <?php } ?>    

    </main>                              
    
    

    


    
    <!-------------- ASIDE ------------> 
    <?php include "includes/admin_sidebar.php" ?>   


</body>
</html>