<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
}
?> 
<?php
//$rootDir = __DIR__; // __DIR__ = G:\xampp\htdocs\pmway.hopto.org\public\imgman
$rootDir = "../images/";
$currentDirectoryItems = array_diff(scandir($rootDir . "/", 1), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..")
$allFiles = [];
foreach ($currentDirectoryItems as $value) {
    $allFiles[] = $value;

    if (is_dir($rootDir . "/" . $value)) { // Check if specified path is a directory
        $allFiles[] = array_diff(scandir($rootDir . "/" . $value), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..");
        $allFiles = array_reverse($allFiles);
        $reversed = array_diff(scandir($rootDir . "/" . $value), [".", ".."]); // Use array_diff to remove both period values eg: ("." , "..");
        $prefixed_reversed = preg_filter('/^/', './../images/', $reversed);
    }
}
$myfile = fopen('images.csv', 'w');

   foreach ($prefixed_reversed as $line) {
    
    fputcsv($myfile, (array) $line);
 }
  
var_dump($prefixed_reversed);
    fclose($myfile);
   // closedir($handle);


