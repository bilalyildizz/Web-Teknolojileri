<?php
$k_adi = $_POST["kullanici_adi"];
$pass = $_POST["sifre"];

$gercek_kadi = "b181210028@gmail.com";
$gercek_pass = "1234";

if(($k_adi==$gercek_kadi) and ($pass==$gercek_pass)){
    echo " 
    <script type='text/javascript'>  
    alert('Hoşgeldiniz “b181210028”'); 
    </script> 
    ";
   
    echo "Giriş Başarılı";

}
else{
    
    header('Location: login.html');
  

}



?>