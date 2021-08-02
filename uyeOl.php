

<!-- HEADER --> 
<?php include "includes/header.php" ?>




<!-- NAVIGATION --> 
<?php include "includes/navigation.php" ;

if(isset($_POST["kayit"])){

$sql="insert into kullanicilar(kullanici_adi,sifre) values('".$_POST["adi"]."','".$_POST["sifre"]."')";

$sql_query = mysqli_query($conn, $sql);

session_start();
$_SESSION["kullanici_id"]= mysqli_insert_id($conn);
$_SESSION["kullanici_adi"]=$_POST["adi"];
echo $_SESSION["kullanici_id"];
header('Location: admin/products.php');

}


?>






    
    <main class="mainLogin">
        <div class="content">
        <form action="" method ="post">
                <div class="login">  
                    <h1 class="girisYap">Üye Ol</h1><br>
                    <p class="prgrf">Sende Hemen Üye Ol ve Yenilikleri Kaçırma!</p>
                    <div class="bilgiler">
                        <p>E-Posta</p><br>
                        <input type="text" name="adi" id="" placeholder="E-Postanızı Girin"><br><br>
                        <p>Şifre</p><br>
                        <input type="password" name="sifre" id="" placeholder="Şifrenizi Girin"><br><br><br>                   
                        <br>      
                        <input type="submit" name="kayit" value="ÜYE OL">
                        <br><br>
                        <p class="sozlesme">Üye Ol'a basarak <b>Üyelik Koşulları</b> ve <b>Kişisel Verilerin Korunması Metni</b>'ni kabul ediyorum.</p>
                    </div>
                </div>   
            </div>
        </form>
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