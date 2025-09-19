<?php
define('DSN', "mysql:host=localhost;dbname=pmwaypjv_pmway");
define('USERNAME', 'pmwaypjv_markjc');
define('PASSWORD', 'ibmhal13971');

try{
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
// echo "Connected successfully";
  //  var_dump($conn->query("DESC images")->fetch(PDO::FETCH_OBJ));
 //   exit;*/
    
}catch (PDOException $ex){
    echo "Database connectivity Issue " . $ex->getMessage();
    exit;
}




