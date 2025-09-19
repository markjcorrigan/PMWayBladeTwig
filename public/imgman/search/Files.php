<?php
session_start();
if ($user['is_admin'] != 1) {
 
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

  exit;
 
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="slick/slick.css" type="text/css">
    <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
    <!--<link rel="stylesheet" href="style/app.css" type="text/css">-->
  <title>View Uploads</title>
   
  <!--<link rel="stylesheet" href="Css/Styles.css">-->

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
          <a href="../../imgman/index.php" class="nav-link">  Images Home</a>
        </li>
       <li class="nav-item">
          <a href="../../imgman/upload.php" class="nav-link">Upload files</a>
        </li>
        <li class="nav-item">
          <a href="../../imgman/searchtable.php" class="nav-link">ImageSearch</a>
        </li>
        <li class="nav-item">
          <a href="../../imgman/admin/" class="nav-link">Admin</a>
        </li>
       <!--
        <li class="nav-item">
          <a href="../../imgman/search/Filename.php"  class="nav-link">ImageNames</a>
        </li>
        <li class="nav-item">
          <a href="../../imgman/search/Files.php"  class="nav-link">ImageNamesWithImage</a>
        </li>-->
        <li class="nav-item">
          <a href="../../imgman/search/View.php"  class="nav-link">OOP</a>
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
$files = glob("../../images/*.*");
for ($i = 0; $i < count($files); $i++) {
    $image = $files[$i];
    $supported_file = array(
        'gif',
        'jpg',
        'jpeg',
        'pdf',
        'psd',
        'png'
    );

    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
        echo "<table border='1' align='center' cellpadding='5' width='700px' >";
        echo "<tr><td>";
        echo basename($image);
        echo "</td><td>";
        echo '<img src="' . $image . '" alt="Random image" ,width=50px, height=50px />';
        echo "</td></tr>";
        echo "</table>";
} else {
continue;
}
}
?>
