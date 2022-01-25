<?php
$host = "localhost";
$user = "root";
$name = "";
$pass = "";
$conn = mysql_connect($host,$user,$pass); 
 
if ($conn) {
    $buka = mysql_select_db ("login");
    if (!$buka) {
        die ("Database tidak dapat dibuka");    
    }
} else {
    die ("Server MySQL tidak terhubung");   
}
?>