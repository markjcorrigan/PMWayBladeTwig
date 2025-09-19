<?php
session_start();
$id = $_SESSION['user_id'];

//var_dump($_SESSION['user_id']);
//var_dump($id);

//define('DSN', "mysql:host=localhost;dbname=f4331026_injustice");
//define('USERNAME', 'f4331026');
//define('PASSWORD', 'Tg9hR@@1');



$conn = new PDO(DSN, USERNAME, PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser

    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

    exit;

} 

$stmt = $conn->query("SELECT is_admin FROM users WHERE id = " . $conn->quote($id));  // quote just in case
//$stmt = $conn->query("SELECT is_admin FROM users WHERE id = 137"); 
//$stmt = $conn->query("SELECT name FROM users WHERE id = 137"); // quote just in case
$user = $stmt->fetch();

//var_dump($user);

if ($user['is_admin'] != 1) {
 
     header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

     exit;
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title>Manage Images Folder</title>
    
   
  <!--<link rel="stylesheet" href="Css/Styles.css">-->

</head>
<body style="background-color: #f5f5f5; !important; ">

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
<!--MENU in INCLUDES FOLDER STARTS-->
<?php include '../includes/menu.php';?>
      <!--MENU in INCLUDES FOLDER ENDS-->
    <!-- Main Area -->
    <!--<section class="container py-2 mb-4">-->








    <!--<link rel="stylesheet" href="./../style/app.css" type="text/css">-->
</head>
<body >

<div class="container" >
    <div class="row mt-4">
        <?php if($statement->rowCount() > 0): ?>
            <div class="col-12 col-md-8 col-lg-7"> <!--mx-auto"--> 
                <h3>Manage Images Folder</h3>
                <!--<p><a href="../">View Gallery</a></p>-->
                
                <?php if(isset($message)): ?>
                    <div class="alert alert-<?= $alert_class_name ?> alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?= $message ?>
                    </div>
                <?php endif; ?>
                
                <table class="table table-bordered table-hover table-sm" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Path</th>
                        <th>Showing</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($image = $statement->fetch(PDO::FETCH_OBJ)): ?>
                        <tr>
                            <th scope="row" width="20"><?= $image->id ?></th>
                            <td width="40">
                                <img src="../../../<?= $image->path ?>" width="100" height="100">
                            </td>
                            
                             <td width="40">
                                <p><a href="../../../<?= $image->path ?>" ><?= $image->path ?></a><br>
                                 <p><a href="../index.php">View Gallery</a> </p>

                            </td>

                            <td>
                                <form class="form-inline" method="post">
                                    <div class="form-group">
                                        <select style="width: 250px;" name="showing" class="form-control">
                                            <option value="<?= $image->showing ?>">
                                                <?= $image->showing ? 'Showing' : 'Hidden' ?>
                                            </option>
                                            <option value="0">Hide</option>
                                            <option value="1">Show</option>
                                        </select>
                                        <input type="hidden" name="id" value="<?= $image->id ?>">
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">
                                        Change Status
                                    </button>
                                </form>
                            </td>
                            <td width="70">
                                <a onclick="return confirm('Do you really want to delete this image');"
                                   class="btn btn-outline-danger" href="index.php?delete=<?= $image->id ?>">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <h2>You have not uploaded any file</h2>
        <?php endif; ?>
    </div>
    <p><a href="../index.php">View Gallery</a> </p>
</div>









<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
