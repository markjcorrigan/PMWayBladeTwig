<?php
$folder = "uploads";
$output = [];

if(is_dir($folder)){
    $handler = opendir($folder);
    while($files = readdir($handler)){
        if(!is_dir($files)){
            $output[] = $files;
        }
    }
}

require 'index.view.php';
