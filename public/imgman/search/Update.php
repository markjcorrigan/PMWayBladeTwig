<?php
session_start();
if ($user['is_admin'] != 1) {
 
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect

  exit;
 
} ?>

<?php
require_once("Dbtest.php");


$p = new Dbtest();
$id = $_GET['id'];


$record = [];
$record = ($p->getPostById($id));

if(isset($_POST) & !empty($_POST)){

	$formupdate = [];
	$formupdate = array('id' 	=> $_POST['id'],
						'path' 	=> $_POST['path'],
						'showing' 		=> $_POST['showing'],
						'created_at' 		=> $_POST['created_at']
								
									);
									
	$res = $p->updatePost($formupdate);								
	 if($res){
		header('location: View.php' );
	 }else{
	 	echo "failed to update data";
	 } 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
			<h2>Update Record</h2>
			<p><a href="Insert.php">Insert Record</a></p>
			<p><a href="View.php">View Records</a></p>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">ID</label>
			    <div class="col-sm-10">
			      <input type="text" name="id"  class="form-control" id="input1" value="<?php echo $record->id ?>" placeholder="id" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Path</label>
			    <div class="col-sm-10">
			      <input type="text" name="path"  class="form-control" id="input1" value="<?php echo $record->path ?>" placeholder="path" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Showing</label>
			    <div class="col-sm-10">
			      <input type="email" name="showing"  class="form-control" id="input1" value="<?php echo $record->showing ?>" placeholder="showing" >
			    </div>
			</div>

			

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Created At</label>
			    <div class="col-sm-10">
			      <input type="text" name="created_at"  class="form-control" id="input1" value="<?php echo $record->created_at ?>" placeholder="created_at" >
			    </div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Update" >
		</form>
	</div>
</div>
</body>
</html>