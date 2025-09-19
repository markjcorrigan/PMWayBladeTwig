<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
}
?> 

<?php

//upload.php

$folder_name = 'uploads/';

if(!empty($_FILES))
{
 $temp_file = $_FILES['file']['tmp_name'];
 $location = $folder_name . $_FILES['file']['name'];
 move_uploaded_file($temp_file, $location);
}

if(isset($_POST["name"]))
{
 $filename = $folder_name.$_POST["name"];
 unlink($filename);
}

$result = array();

$files = scandir('uploads');

$output = '<div class="row">';

if(false !== $files)
{
 foreach($files as $file)
 {
  if('.' !=  $file && '..' != $file)
  {
   $output .= '
   <div class="col-md-2">
   <p>'.$file.'</p>
    <img src="'.$folder_name.$file.'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
    <button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button>
   </div>
   ';
  }
 }
}
$output .= '</div>';
echo $output;

?>
