<?php
define('DSN', "mysql:host=localhost;dbname=f3608940_PMWay");
define('USERNAME', 'f3608940_markjc');
define('PASSWORD', 'Qwerpoiu13971@');

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




