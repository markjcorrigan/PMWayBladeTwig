<?php
include_once __DIR__ . '/db/connect.php';


// $folder = "uploads";
// $output = [];

// if(is_dir($folder)){
//     $handler = opendir($folder);
//     while($files = readdir($handler)){
//         if(!is_dir($files)){
//             $output[] = $files;
//         }
//     }
// }

$query = "SELECT * FROM images WHERE showing = :showing";
$statement = $conn->prepare($query);
$statement->execute([':showing' => 1]);
require 'index.view.php';

