<?php 



# server name

$sName = "";

# user name

$uName = "codewith_blogs1";

# password

$pass = "quan20112002";



# database name

$db_name = "codewith_chat";



#creating database connection

try {

    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 

                    $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

  echo "Connection failed : ". $e->getMessage();

}