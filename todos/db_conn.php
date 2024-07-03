<?php
$sName = "localhost";
$uName = "rest";
$pass = "";
$db_name = "todo";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                $uName, $pass);
   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION); 
   // echo "connected!";
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}

?>