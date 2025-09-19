<?php
include_once __DIR__ . '/db/connect.php';

if(!empty($_FILES)){

    $temp = $_FILES['file']['tmp_name'];
    $dir_separator = DIRECTORY_SEPARATOR;
    $folder = "./../images";

    $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
    
    $target_path = $destination_path.$_FILES['file']['name'];
    if(move_uploaded_file($temp, $target_path)){
        $path = $folder.$dir_separator.$_FILES['file']['name'];
        $insertQuery = "INSERT INTO images (path) VALUES(:path)";
        $statement = $conn->prepare($insertQuery);
        $statement->execute([':path' => $path]);
    }
}