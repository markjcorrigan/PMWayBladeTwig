<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/Styles.css">
  <title>Posts</title>
</head>
<body style="background-color:#c2e8fc !important; ">
  <!-- NAVBAR -->
   <!--<div style="height:10px; background:#27aae1;"></div>-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="/" class="navbar-brand"> PMWay</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a href="index.php" class="nav-link">  Images Home</a>
        </li>
       <li class="nav-item">
          <a href="upload.php" class="nav-link">Upload files</a>
        </li>
        <li class="nav-item">
          <a href="imagesdir.php" class="nav-link">Image Grid</a>
        </li>
        <li class="nav-item">
          <a href="./admin" class="nav-link">Admin</a>
        </li>
        <!-- <li class="nav-item">
          <a href="Categories.php" class="nav-link">Categories</a>
        </li>
        <li class="nav-item">
          <a href="Admins.php" class="nav-link">Manage Admins</a>
        </li>
        <li class="nav-item">
          <a href="Comments.php" class="nav-link">Comments</a>
        </li>
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link" target="_blank">Live Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="Logout.php" class="nav-link text-danger">
          <i class="fas fa-user-times"></i> Logout</a></li>
      </ul>-->
      </div>
    </div>
  </nav>
     <!--<div style="height:10px; background:#27aae1;"></div>-->
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <!--<header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1><i class="fas fa-blog" style="color:#27aae1;"></i> Blog Posts</h1>
          </div>
          <div class="col-lg-3 mb-2">
            <a href="AddNewPost.php" class="btn btn-primary btn-block">
              <i class="fas fa-edit"></i> Add New Post
            </a>
          </div>
          <div class="col-lg-3 mb-2">
            <a href="Categories.php" class="btn btn-info btn-block">
              <i class="fas fa-folder-plus"></i> Add New Category
            </a>
          </div>
          <div class="col-lg-3 mb-2">
            <a href="Admins.php" class="btn btn-warning btn-block">
              <i class="fas fa-user-plus"></i> Add New Admin
            </a>
          </div>
          <div class="col-lg-3 mb-2">
            <a href="Comments.php" class="btn btn-success btn-block">
              <i class="fas fa-check"></i> Approve Comments
            </a>
          </div>

        </div>
      </div>
    </header>-->
    <!-- HEADER END -->

    <!-- Main Area -->
    <section class="container py-2 mb-4">


<?php

 
//echo "<a href=\"/imgman/index.php\"><h3>Images Home<br><br></h3></a>";


// How many images should be shown on each apge?
$limit = 200; 
 
// How many adjacent pages should be shown on each side?
$adjacents = 3;
 
// This is the name of file ex. I saved this file as index.php.
$targetpage = 'imagefind.php';   ///////////////////////////////////////////////////////////////////was imagesdir.php//////////
 
// All iamges holder, defalut value is empty
$allImages = [];
 
// Target images directory
$image_dir = './../images/';
// Iterator over the directory
$dir = new DirectoryIterator(dirname(__FILE__).DIRECTORY_SEPARATOR.$image_dir);
 
// Iterator over the files and push jpg and png images to $allImages array.
foreach ($dir as $fileinfo) {
    if ($fileinfo->isFile() && in_array($fileinfo->getExtension(),array('jpg','png','gif','jpeg','pdf','psd'))) { 
      array_push($allImages,$image_dir.$fileinfo->getBasename());
    }
  }
 
// total number of images
$total_pages = count($allImages);
    
//how many items to show per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
//  if no page var is given, set start to 0
$start = $page ?  (($page - 1) * $limit) : 0; 
 
    
$images = array_slice( $allImages, $start, $limit );;
 
/* Setup page vars for display. */
if ($page == 0) $page = 1;                    //if no page var is given, default to 1.
$prev = $page - 1;                            //previous page is page - 1
$next = $page + 1;                            //next page is page + 1
$lastpage = ceil($total_pages/$limit);        //lastpage is = total pages / items per page, rounded up.
$lpm1 = $lastpage - 1;                        //last page minus 1
    
$pagination = "";
if($lastpage > 1)
{    
  $pagination .= "<div class=\"pagination\">";
  //previous button
  if ($page > 1) 
    $pagination.= "<a href=\"$targetpage?page=$prev\">Previous &nbsp;&nbsp;</a>";
  else
    $pagination.= "<span class=\"disabled\">Previous &nbsp;&nbsp;</span>";    
  
  //pages    
  if ($lastpage < 7 + ($adjacents * 2))    //not enough pages to bother breaking it up
  {    
    for ($counter = 1; $counter <= $lastpage; $counter++)
    {
      if ($counter == $page)
        $pagination.= "<span class=\"current\">$counter</span>";
      else
        $pagination.= "<a href=\"$targetpage?page=$counter\">&nbsp; $counter &nbsp;</a>";                    
    }
  }
  elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
  {
    //close to beginning; only hide later pages
    if($page < 1 + ($adjacents * 2))        
    {
      for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
      {
        if ($counter == $page)
          $pagination.= "<span class=\"current\">&nbsp; $counter &nbsp;</span>";
        else
          $pagination.= "<a href=\"$targetpage?page=$counter\">&nbsp; $counter &nbsp;</a>";                    
      }
      $pagination.= "...";
      $pagination.= "<a href=\"$targetpage?page=$lpm1\">&nbsp; $lpm1 &nbsp;</a>";
      $pagination.= "<a href=\"$targetpage?page=$lastpage\">&nbsp; $lastpage &nbsp;&nbsp;</a>";        
    }
    //in middle; hide some front and some back
    elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    {
      $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
      $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
      $pagination.= "...";
      for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
      {
        if ($counter == $page)
          $pagination.= "<span class=\"current\">&nbsp; $counter &nbsp;</span>";
        else
          $pagination.= "<a href=\"$targetpage?page=$counter\">&nbsp; $counter &nbsp;</a>";                    
      }
      $pagination.= "...";
      $pagination.= "<a href=\"$targetpage?page=$lpm1\">&nbsp; $lpm1 &nbsp;</a>";
      $pagination.= "<a href=\"$targetpage?page=$lastpage\">&nbsp; $lastpage &nbsp;</a>";        
    }
    //close to end; only hide early pages
    else
    {
      $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
      $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
      $pagination.= "...";
      for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
      {
        if ($counter == $page)
          $pagination.= "<span class=\"current\">&nbsp; $counter &nbsp;</span>";
        else
          $pagination.= "<a href=\"$targetpage?page=$counter\">&nbsp; $counter &nbsp;</a>";                    
      }
    }
  }
  
  //next button
  if ($page < $counter - 1) 
    $pagination.= "<a href=\"$targetpage?page=$next\">&nbsp;&nbsp; Next</a>";
  else
    $pagination.= "<span class=\"disabled\">&nbsp;&nbsp; Next</span>";
  $pagination.= "</div>\n";        
}
 
if(count($images) > 0) {
  foreach($images as $image) { ?>
   <a href="<?php echo $image; ?>"><img width="100" src="<?php echo $image; ?>" /></a>

<?php } 
} else {
  echo 'No images';
}

 
echo $pagination;
echo "<a href=\"$targetpage?page=1\">Home</a>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
  </html
  
<?php ?>


