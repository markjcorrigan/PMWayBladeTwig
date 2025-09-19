<?php


session_start();
if ($user['is_admin'] != 1) {
 
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

  exit;
 
} 
define("ROW_PER_PAGE",50);
include_once __DIR__ . '/db/connect.php';

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
	}
	
	$query = $sql.$limit;
	$pdo_statement = $conn->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
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

</head>
<body style="background-color:#c2e8fc !important;">
 <!--MENU in INCLUDES FOLDER STARTS-->
 <?php include 'includes/menu.php';?>
      <!--MENU in INCLUDES FOLDER ENDS-->
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
        </tr>
      </thead>
      <tbody id='table-body'>
        <?php
        if(!empty($result)) { 
            foreach($result as $row) {
        ?>
          <tr class='table-row'>
            <td><?php echo $row['path']; ?></td>
            <td><a href="<?php echo $row['path']; ?>"><img width="100" src="<?php echo $row['path']; ?>" ></a></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['showing']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
          </tr>
        <?php
            }
        }
        ?>
      </tbody>
    </table>
    <?php echo $per_page_html; ?>
    </form>
    

    </div>
