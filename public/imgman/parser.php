<?php
include_once __DIR__ . '/db/connect.php';
if(!empty($_FILES)){

    $temp = $_FILES['file']['tmp_name'];
    
    $dir_separator = DIRECTORY_SEPARATOR;
    $folder = "./../images";

	
   $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
  
    
    $target_path = $destination_path.$_FILES['file']['name'];

	 if(file_exists($folder.$dir_separator.$_FILES['file']['name'])) // file does not exists then upload
	 	 {
            
         // $fileName = $folder.$dir_separator.$_FILES['file']['name'];
		  echo "Error: Duplicate file name!";
         
         
		  http_response_code(404);
        
          }
	 else

	    {
  move_uploaded_file($temp, $target_path);
          $path = $folder.$dir_separator.$_FILES['file']['name'];
		
        $insertQuery = "INSERT INTO images (path) VALUES(:path)";
        $statement = $conn->prepare($insertQuery);
        $statement->execute([':path' => $path]);

	}
		



}
/* if(!empty($_FILES)){

    $temp = $_FILES['file']['tmp_name'];
    $dir_separator = DIRECTORY_SEPARATOR;
    $folder = "./../images";

   // var_dump($temp);
    

   $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
    
    $target_path = $destination_path.$_FILES['file']['name'];
    if(move_uploaded_file($temp, $target_path)){
        $path = $folder.$dir_separator.$_FILES['file']['name'];
        $insertQuery = "INSERT INTO images (path) VALUES(:path)";
        $statement = $conn->prepare($insertQuery);
        $statement->execute([':path' => $path]);
    }
}
 */
/*
if(!empty($_FILES)){

    $temp = $_FILES['file']['tmp_name'];
    $dir_separator = DIRECTORY_SEPARATOR;
    $folder = "./../images";

    $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
    
    $target_path = $destination_path.$_FILES['file']['name'];
    $image_name = $_FILES['file']['name'];
    $targetFile =  $target_path . '/' . $image_name; 
    $file_exists = file_exists ( $targetFile );
    if( !$file_exists ) //If file does not exists then upload
    {
    move_uploaded_file($temp, $target_path){
        $path = $folder.$dir_separator.$_FILES['file']['name'];
        $insertQuery = "INSERT INTO images (path) VALUES(:path)";
        $statement = $conn->prepare($insertQuery);
        $statement->execute([':path' => $path]);
    }
 

else //If file exists then echo the error and set a http error response
{
    echo 'Error: Duplicate file name, please change it!';
    http_response_code(404);
}
}

/////////////////////////////////////////////////////////////
<?php
include_once __DIR__ . '/db/connect.php';

if(!empty($_FILES)){

    $temp = $_FILES['file']['tmp_name'];
    $dir_separator = DIRECTORY_SEPARATOR;
    $folder = "./../images";

    $destination_path = dirname(__FILE__).$dir_separator.$folder.$dir_separator;
    
    $target_path = $destination_path.$_FILES['file']['name'];
    $image_name = $_FILES['file']['name'];
    $targetFile =  $target_path . '/' . $image_name; 
    $file_exists = file_exists ( $targetFile );
    if( !$file_exists ) //If file does not exists then upload
    {
    move_uploaded_file($temp, $target_path){
        $path = $folder.$dir_separator.$_FILES['file']['name'];
        $insertQuery = "INSERT INTO images (path) VALUES(:path)";
        $statement = $conn->prepare($insertQuery);
        $statement->execute([':path' => $path]);
    }
 

else //If file exists then echo the error and set a http error response
{
    echo 'Error: Duplicate file name, please change it!';
    http_response_code(404);
}
}*/