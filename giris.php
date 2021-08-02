
<!-- HEADER --> 
<?php include "includes/header.php" ?>




<!-- NAVIGATION --> 
<?php include "includes/navigation.php" ?>







    <main class="mainLogin">

        <?php
            if(isset($_POST["GIRIS"])){
            $sqll="select * from kullanicilar where kullanici_adi = '".$_POST['ad']."' and sifre='". $_POST['sifre']."'";
            echo $sqll;    
            $sql_get = mysqli_query($conn, $sqll);

                if($row = mysqli_fetch_assoc($sql_get )){

                    echo "giriş yaptınız";
                    session_start();
                    $_SESSION["kullanici_id"]=$row ["kid"];
                    $_SESSION["kullanici_adi"]=$row ["kullanici_adi"];
                    echo $_SESSION["kullanici_id"];
                    header('Location: admin/products.php');

                }
                else{

                    echo "kayıtlı değilsiniz";
                }
                    
            }
            else{

                
            

        ?>





        <form action="" method = "post">
            <div class="content">
                <div class="login">  
                    <h1 class="girisYap">Giriş Yap</h1><br>
                    <p class="prgrf">Sende Hemen Giriş Yap ve Yenilikleri Kaçırma!</p>
                    <div class="bilgiler">
                        <p>E-Posta</p><br>
                        <input type="text" name="ad" id="" placeholder="E-Postanızı Girin"><br><br>
                        <p>Şifre</p><br>
                        <input type="password" name="sifre" id="" placeholder="Şifrenizi Girin"><br><br><br>
                        <a href="uyeOl.php">Üye Değil misiniz? ,Hemen Üye Olun</a>
                        <br><br>      
                        <input type="submit" name="GIRIS" value="GİRİŞ YAP">
                    </div>
                </div>   
            </div>
        </form>    

        <?php }  ?>
    </main>


    <div class="UnluMarkPopSayf">
        <div class="table_1">
            <br><br>
            <table class="table1" cellspacing="60" cellpading="60">
                <caption>Ünlü Markalar Ve Mağazalar</caption>
                <tr><td>Boyner</td><td>Tekzen</td><td>Teknosa</td></tr>
                <tr><td>E-Bebek</td><td>Decathlon</td><td>Toyzz Shop</td></tr>
                <tr><td>Samsung</td><td>Apple</td><td>Huawei</td></tr>
                <tr><td>Xiomi</td><td>Oppo</td><td>Monster Notebook</td></tr>
                <tr><td>Lenova</td><td>Arçelik</td><td>DYSON</td></tr>
                <tr><td>Adidas</td><td>Nike</td><td>Lumberjack</td></tr>
                <tr><td>Flo</td><td>Columbia</td><td>CROCS</td></tr>
            
                
            </table>           
        </div>
        <div class="table_1">
            <br><br>
            <table class="table1" cellspacing="60" cellpading="60">
                <caption>Popüler Sayfalar</caption>
                <tr><td>Samsung</td><td>Oppo</td><td>Monster</td></tr>
                <tr><td>E-Bebek</td><td>Lumberjack</td><td>Monster Shop</td></tr>
                <tr><td>Nike</td><td>Apple</td><td>Huawei</td></tr>
                <tr><td>Xiomi</td><td>Columbia</td><td>Monster Notebook</td></tr>
                <tr><td>CROCS</td><td>Arçelik</td><td>DYSON</td></tr>
                <tr><td>DYSON</td><td>Nike</td><td>Lumberjack</td></tr>
                <tr><td>Flo</td><td>Arçelik</td><td>CROCS</td></tr>
            
                
            </table>           
        </div>       
        

    </div>

    <footer class="footerLogin">
        <div class="footer_table1">
            <h1 class="baslık">Click To Buy</h1><br>
            <p>Biz Kimiz</p><br>
            <p>Kariyer</p><br>
            <p>İletişim</p><br>
            <p>ClickToBuyda Satış Yap</p><br>

        </div>

        <div class="footer_table1">
            <h1>About Us</h1><br>
            <p>Who we are</p><br>
            <p>Careers</p><br>
            <p>Contact Us</p><br>
            

        </div>

        <div class="footer_table1">
            <h1>Kampanyalar</h1><br>
            <p>Elite Üyelik</p><br>
            <p>Anneler Günü Hediyesi</p><br>
            <p>Fırsatlar</p><br>
            

        </div>

        
        <div class="footer_table1">
            <h1>Yardım</h1><br>
            <p>Sıkça Sorulan Sorular</p><br>
            <p>Canlı Yardım</p><br>
            <p>Nasıl İade Edebilirim</p><br>
            <p>İşlem Rehberi</p>

        </div>



        
    </footer>


  

</body>

</html>