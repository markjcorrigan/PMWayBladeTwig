<?php
require __DIR__ . '/../db/connect.php';

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

if(isset($_POST['showing'])){
    $_POST['showing'] ? $showing = (int) $_POST['showing'] : $showing = (int) 0;
    $id = $_POST['id'];
    
    $imageQuery = $conn->query("SELECT * FROM images WHERE id = $id LIMIT 1") ;
    if($imageQuery->rowCount() == 1){
        $dQuery = "UPDATE images SET showing = :showing WHERE id = :id";
        $statement = $conn->prepare($dQuery);
        $statement->execute([':showing' => $showing, ':id' => $id]);
        
        if($statement->rowCount() == 1){
            $message = "Image status update.";
            $alert_class_name = 'success';
        }else{
            $message = "You have not made any changes";
            $alert_class_name = 'warning';
        }
    }else{
        $message = "Image not found";
        $alert_class_name = 'danger';
    }
}

$query = "SELECT * FROM images";
$statement = $conn->query($query);

require __DIR__ . '/index.view.php';
