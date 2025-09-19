<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
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
  <meta charset="UTF-8">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 
  <link rel="stylesheet" href="slick/slick.css" type="text/css">
   <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
	   <link href="style/dropzone.css" type="text/css" rel="stylesheet" />
	

</head>
<body >
 

<!--MENU in INCLUDES FOLDER STARTS-->
<?php include 'includes/menu.php';?>
      <!--MENU in INCLUDES FOLDER ENDS-->
    <!-- Main Area -->
    <section class="container py-2 mb-4 danger">


<br><br><br>














    <meta charset="UTF-8">
    <title>Multi File Upload</title>
 
		
		

  
</head>

<body >

<script src="scripts/dropzone.js"></script>
    <script src="scripts/validate.js"></script>
</head>
 
<body>
 
<div class="container">
<br>
<br>
<br>


<br>
<form action="parser.php" class="dropzone longDashedBorder" id="uploads"  style="border:dashed 3px #f20afb !important;
transform:scale(1) !important;
overflow:hidden !important; height: 20em; 
" >

<div class="dz-preview dz-file-preview">
              <div class="dz-details">
               <div class="dz-filename"><span data-dz-name class="badge badge-success"></span></div>
                
                <div class="dz-filename"><span data-dz-name class="badge badge-success"></span></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
                <div class="dz-details"> 
               
            </div>`
</div>

</form>

<p id="message"></p>

<script>
Dropzone.options.uploads = {

init: function() {

    this.on('addedfile', function(file){

        var preview = document.getElementsByClassName('dz-preview');
        preview = preview[preview.length - 1];

        var imageName = document.createElement('span');
        imageName.innerHTML = file.name;

        preview.insertBefore(imageName, preview.firstChild);

    });
}
};
</script>




<br>



	
 

	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>