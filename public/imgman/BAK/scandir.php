<?php
//$rootDir = __DIR__; // __DIR__ = G:\xampp\htdocs\pmway.hopto.org\public\imgman
$rootDir = "../images/";
$currentDirectoryItems = array_diff(scandir($rootDir . "/", 1), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..")
$allFiles = [];
foreach ($currentDirectoryItems as $value) {
    $allFiles[] = $value;

    if (is_dir($rootDir . "/" . $value)) { // Check if specified path is a directory
        $allFiles[] = array_diff(scandir($rootDir . "/" . $value), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..");
        $reversed = array_reverse($allFiles);
        $reversed = array_diff(scandir($rootDir . "/" . $value), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..");
    }
}
$myfile = fopen('images.csv', 'w');

   foreach ($reversed as $line) {
    
    fputcsv($myfile, (array) $line);
 }
  
var_dump($reversed);
    fclose($myfile);
    closedir($handle);


