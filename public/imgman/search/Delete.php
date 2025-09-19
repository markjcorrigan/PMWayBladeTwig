<?php
require_once("Dbtest.php");


$p = new Dbtest();
 //$id = $_GET['id'];

 $res = $p->deletePost(($_GET['id']));

 if($res){
	
	 header('location: View.php' );
	 
 }else{
 	echo "Failed to Delete Record";
 }
?>