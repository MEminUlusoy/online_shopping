<!----------------- HEADER ------------------> 
<?php
session_start();

if(!(isset($_SESSION["kullanici_id"])))  header('Location: ../giris.php');

 include "includes/admin_header.php" ?>  

    
    <main>
        <div class="add_product_footer">
            <h1 class="modal-title">Add New Product</h1> 
            <hr>
            <br><br>
            <form action="products.php" method="post" enctype = "multipart/form-data">
                <div class="form-group">        
                    <label for="brand_name">Brand Name</label>
                    <input type="text" name="brand_name">                        
                </div>   
                <br><br>
                 
                <div class="form-group">
                    <label for="brand_category">Category</label>
                    <input type="text" name="brand_category">                        
                </div>         
                <br><br>        
                                
                <div class="form-group">      
                    <label for="brand_image">Brand Image</label>
                    <input type="file"  name="brand_image">                        
                </div>      

                <br><br>
                 
                <div class="form-group">      
                    <label for="brand_text">Brand Text</label>
                    <textarea  name="brand_text" id="" cols="20" rows="5"></textarea>                        
                </div>     
                <br><br> 

                <div class="form-group">           
                    <label for="brand_tags">Brand Tags</label>
                    <input type="text"  name="brand_tags">                        
                </div>        
                <br><br>

                <div class="form-group">           
                    <label for="brand_cost">Brand Cost</label>
                    <input type="text" name="brand_cost">
                </div>
                <br>
                    
                <br><br>

                                    
                <button type="submit" name="add_brands" >Add Product</button>
                                    
            </form>       
        </div>
    
    </main>                              
    
    
    
    <!-------------- ASIDE ------------> 
    <?php include "includes/admin_sidebar.php" ?>   


</body>
</html>