<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title>Upload files</title>
   
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








    <h3 align="left">Upload Files (for this web site)</h3><br>












    <meta charset="UTF-8">
    <title>Multi File Upload</title>
    <link href="style/dropzone.css" type="text/css" rel="stylesheet" />
    <script src="scripts/dropzone.js"></script>
    <script src="scripts/validate.js"></script>
</head>

<body>
<form action="parser.php" id="uploads" class="dropzone"></form>

<!--<p><a href="index.php">View Upload</a> </p>-->

<div id="msg"></div>
</body>
</html>