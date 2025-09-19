<?php

require_once("Dbtest.php");

$p = new Dbtest();
$object = [];
$object = $p->getPosts();


//Array To Table
//NB I created this before I used forms.
//I.e. this function will create a table on the fly from the $object variable produced below.
//See between php tags at bottom of this page for the function that calls this.

function array_to_table($object) 
{   
    echo "<style>
    table {
      border: 2px solid #000;
      align: middle;
    }

    td {
        border: 1px solid #000;
      }

      th {
        border: 1px solid #000;
      }

      tr {
        border: 1px solid #000;
      }
  </style>";
    
    echo "<table border: 1px solid black; >";
      
    // Table header
        foreach ($object[0] as $key => $value) {
            echo "<th>".$key."</th>";
        }

    // Table body
       foreach ($object as $value) {
           echo "<tr>";
           foreach ($value as $element) {
                 echo "<td>".$element."</td>";
           } 
          echo "</tr>";
       } 
      echo "</table>";
}


//NB These functions all work on the Dbtest() object that is produced at the top of this page.



// //Select
// var_dump($p->getPosts());
// var_dump($p->getPostById(2));

// //Insert
// $data = ['title' => 'New Post 1', 'content' => 'This is Another Content'];
// $p->addPost($data);
// var_dump($p->getPosts());

// //Update
// $data = ['id' => 4, 'title' => '[Updated] New Post 1', 'content' => 'This is Another Content'];
// $p->updatePost($data);
// var_dump($p->getPosts());


// //Delete
// $p->deletePost(4);
// var_dump($p->getPosts());

// // Used this to try to getPosts to show up in a html table which was replaced by function array_to_table($object) at top of page
// $stores = [];
// $stores = $p->getPosts();
// echo "<pre>";
// foreach ( $stores as  $store ) {
//     foreach ( $store as $key => $value ) {
//         echo $key, " = ", $value, PHP_EOL;
//     }
// }

// // Insert a new record fixed for displaying on a table.
// $data = ['firstname' => 'Joe', 'lastname' => 'Bloggs', 'email' => 'Joe@Joe.co.za','gender' => 'male','age' => '29'];
// $p->addPost($data);
// $object = [];
// $object = $p->getPosts();

// Improved Post Delete
// $p->deletePost(15);
// $object = [];
// $object = $p->getPosts();

?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
<br>
<h2>View Records</h2>
<p><a href="Insert.php">Insert Record</a></p>
<br>
	<div class="row">
		<table class="table">
    <?php foreach ($object[0] as $key=> $value) { ?>
           <th> 
           
           <?php echo ucfirst(strtolower("$key")); ?>
           </th>
           
            <?php } ?>
            <th>Edit Delete</th>
			</tr>
			<?php foreach ($object as $value) { ?>
       <tr>
       <?php foreach ($value as $element) { ?>
         <td>  <?php echo " {$element} " ?> 
        
         </td>
        
        
         <?php } ?>
         <td><a href="Update.php?id=<?php echo $value->id; ?>">Edit</a> <a href="Delete.php?id=<?php echo $value->id; ?>">Delete</a></td>
        </tr>
        <?php } ?>
     </table>
</div>

<?php
//NB see note about this function that creates a table on the fly.
//Not needed as I am using forms.
// array_to_table($object);
?>

</div>
</body>
</html>