<?php 


if($_POST["fname"]=="" || $_POST["surname"]=="" ||  $_POST["email"]=="" ||  $_POST["gender"]=="" ||  $_POST["sehir"]==""  || $_POST["birthday"]==""){
    header('Location: iletisim.html');
}
else{
    echo "Adı: ".$_POST["fname"];
    echo "<br>";


echo "Soyadı: ".$_POST["surname"];
    echo "<br>";


echo "Email: ".$_POST["email"];
    echo "<br>";



echo "Cinsiyet: ".$_POST["gender"];
    echo "<br>";;



echo " Şehir: ".$_POST["sehir"];
    echo "<br>";;


echo "Doğum Tarihi: ".$_POST["birthday"];
    echo "<br>";                       
}


if( !empty( $_POST["html"])  && !empty( $_POST["css"] ))
{
    echo "Yazılım Bilginiz: ".$_POST["html"].",".$_POST["css"];

}
if( empty($_POST["html"])  &&  !empty($_POST["css"]) ){
    echo "Yazılım Bilginiz: ".$_POST["css"];

}
if( !empty($_POST["html"])  &&  empty($_POST["css"]))
{
    echo "Yazılım Bilginiz: ".$_POST["html"];
}
if( empty($_POST["html"])  &&  empty($_POST["css"]))
{
    echo "Yazılım Bilginiz: --------";
}
echo "<br>";


echo "Ek: ".$_POST["message"];




?>