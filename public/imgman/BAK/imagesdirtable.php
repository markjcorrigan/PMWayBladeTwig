<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta name="generator" content="HTML Tidy for Linux (vers 6 November 2007), see www.w3.org" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Images As Picture from Images Folder</title>

<meta content="en-us" http-equiv="Content-Language" />
<meta content="General" name="rating" />
<meta content="no" http-equiv="imagetoolbar" />
<link href="styles/site.css" rel="stylesheet" type="text/css" />


</head>

<body>
<h3>Listing of Images from Images Folder in a Table</h3>
<hr>
<div align="center">
<table  width:70%;>
<tr>
  <th width:20%;>&nbsp;&nbsp;Image Name&nbsp;&nbsp;&nbsp;&nbsp;</th>
  <th width:50%;>&nbsp;&nbsp;&nbsp;&nbsp;Image As Picture&nbsp;&nbsp;</th>
</tr>
<?php
$files = glob("uploads/*.*");
for ($i = 0; $i < count($files); $i++) {
    $image = $files[$i];
    $supported_file = array(
        'gif',
        'jpg',
        'jpeg',
        'png',
        'pdf',
        'psd'
    );

    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
      echo "<table border='1'>";
  echo "<tr><td>";
  echo basename($image);
  echo "</td><td>";
  echo '<img src="' . $image . '" alt="Random image" ,width=100px, height=100px />';
  echo "</td></tr>";
  echo "</table>";
} else {
continue;
}
}
?>
</table>

</div>

<br class="clearFloat" /> <br />
	<br />
	<!-- Don't edit this line on left.  It is used to ensure divs can stay in place -->
</div>
</body>
<!-- Content Container ends here -->	




                      

      
    
<!-- #EndEditable -->
		
</body>
</html>

