<?php
session_start();
if ($user['is_admin'] != 1) {
 
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

  exit;
 
} ?>
<?php
require_once("Dbtest.php");


$p = new Dbtest();

if(isset($_POST) & !empty($_POST)){

	$forminsert = [];
	$forminsert = array('id' 			=> $_GET['id'],
						'path' 	=> $_POST['path'],
						'showing' 		=> $_POST['showing'],
						'created_at' 			=> $_POST['created_at']
									
									);
									
	$res = $p->addPost($forminsert);								
	 if($res){
		header('location: View.php' );
	 }else{
	 	echo "failed to insert data";
	 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>Insert Record</h2>
			<p><a href="View.php">View Records</a></p>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">ID</label>
			    <div class="col-sm-10">
			      <input type="text" name="id"  class="form-control" id="input1" value="" placeholder="id" required >
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Path</label>
			    <div class="col-sm-10">
			      <input type="text" name="path"  class="form-control" id="input1" value="" placeholder="path" required >
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Showing</label>
			    <div class="col-sm-10">
			      <input type="showing" name="showing"  class="form-control" id="input1" value="" placeholder="showing" required >
			    </div>
			</div>

					<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Created At</label>
			    <div class="col-sm-10">
			      <input type="text" name="created_at"  class="form-control" id="input1" value="" placeholder="created_at" required >
			    </div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Insert" >
		</form>
	</div>
</div>
</body>
</html>