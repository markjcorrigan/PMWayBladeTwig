<?php


session_start();


define("ROW_PER_PAGE",20);
require __DIR__ . '/../db/connect.php';


$id = $_SESSION['user_id'];

//var_dump($_SESSION['user_id']);
//var_dump($id);

//define('DSN', "mysql:host=localhost;dbname=f4331026_injustice");
//define('USERNAME', 'f4331026');
//define('PASSWORD', 'Tg9hR@@1');



$conn = new PDO(DSN, USERNAME, PASSWORD);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$stmt = $conn->query("SELECT is_admin FROM users WHERE id = " . $conn->quote($id));  // quote just in case
//$stmt = $conn->query("SELECT is_admin FROM users WHERE id = 137"); 
//$stmt = $conn->query("SELECT name FROM users WHERE id = 137"); // quote just in case
$user = $stmt->fetch();

//var_dump($user);

if ($user['is_admin'] != 1) {
 
     header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

     exit;
    
    
}





	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = 'SELECT * FROM images WHERE path LIKE :keyword ORDER BY id DESC ';
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
	$pagination_statement = $conn->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
        $per_page_html .= "</div>";
        
        $query = $sql.$limit;
        $pdo_statement = $conn->prepare($query);
        $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
        $pdo_statement->execute();
        $result = $pdo_statement->fetchAll();
    }
    

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        
        
        $imageQuery = $conn->query("SELECT * FROM images WHERE id = $id LIMIT 1") ;
        if($imageQuery->rowCount() == 1){
            $image = $imageQuery->fetch(PDO::FETCH_OBJ);
            
            $dQuery = "DELETE FROM images WHERE id = :id";
            $statement = $conn->prepare($dQuery);
            $statement->execute([':id' => $id]);
            
            unlink("../{$image->path}");
            header("Location: index.php");
        }else{
            $message = "Image not found";
            $alert_class_name = 'danger';
        }
    }
	

    







?>  







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
<!--MENU in INCLUDES FOLDER STARTS-->
<?php include '../includes/menu.php';?>
      <!--MENU in INCLUDES FOLDER ENDS-->
</head>
<body style="background-color:#f5f5f5; !important;">
  <!-- NAVBAR -->
   <!--<div style="height:10px; background:#27aae1;"></div>-->
  <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="/" class="navbar-brand"> PMWay</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a href="../../imgman/index.php" class="nav-link">  Home</a>
        </li>
        <li class="nav-item">
          <a href="../../imgman/imagesdir.php" class="nav-link">  ImagesPaginated</a>
        </li>
       <li class="nav-item">
          <a href="../../imgman/upload.php" class="nav-link">Upload files</a>
        </li>
        <li class="nav-item">
          <a href="../../imgman/newadmin/" class="nav-link">ImageSearch</a>
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
      <!--  <li class="nav-item">
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
     <!-- </div>
    </div>
  </nav>-->
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

    <br>
    <br>

    <div align="center">
    <form name='frmSearch' action='' method='post'>
    <div style='text-align:left;margin:20px 0px;'>
    <table class='tbl-qa'  cellpadding="5">
      <thead>
    
        <tr>
          <th class='table-header' width='90%'>Search Term <br>(Empty returns all)</th>
        </tr>
   
    </table>
    <tbody id='table-body' border="1" cellpadding="5">

       
    <tr class='table-row'>
            <td><input type='text'  name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' maxlength='100' width='200'></td>
     
    </tr>
    </table>
    <br>
    <br>
    <table class='tbl-qa' border="1" cellpadding="5">
      <thead>
        <tr>
          <th class='table-header' width='30%'>Image Name with Path</th>
          <th class='table-header' width='30%'>Image</th>
          <th class='table-header' width='10%'>ID</th>
          <th class='table-header' width='10%'>Showing</th>
          <th class='table-header' width='20%'>Created At</th>
          <th class='table-header' width='20%'>Delete (Y/N)</th>
         
        </tr>
        
      </thead>
      <tbody id='table-body'>
        <?php
        if(!empty($result)) { 
            foreach($result as $row) {
        ?>
          <tr class='table-row'>
            <td><?php echo $row['path']; ?></td>
            <td><a href="../<?php echo $row['path']; ?>" target="_blank" title="Click to download image"><img width="100" src="../<?php echo $row['path']; ?>"  ></a></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['showing']; ?></td>
            <td><?php echo $row['created_at']; ?></td>

            <td width="70">
        
                                <a onclick="return confirm('Do you really want to delete this image');"
                                   class="btn btn-outline-danger" href="index.php?delete=<?php echo $row['id']; ?>">
                                    Delete
                                </a>
                            </td>
          </tr>
        <?php
            }
        }
        ?>
      </tbody>
    </table>








    <?php echo $per_page_html; ?>
    </form>
    


























<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>




