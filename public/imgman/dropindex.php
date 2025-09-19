<?php
session_start();
if ( ! isset($_SESSION['user_id'])) {   // from App\Auth::getUser
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $url, true, 303);   // from Core\Controller::redirect
    exit;
}
?> 
<!DOCTYPE html>
<html>
 <head>
  <title>uploads folder in imgman</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
   <link href="style/dropzone.css" type="text/css" rel="stylesheet" /> 
  
 </head>
 <body>
  <div class="container">

 <p><a href="../imgman">Back</a></p>

   <p>Temporary holder in imgman before moving to resources folder<br>Note:  Can overwrite same filename.  Or add date to version control it.</p>
   
   <form action="dropupload.php" class="dropzone " id="dropzoneFrom" style="border:dashed 3px #f20afb !important;
transform:scale(1) !important;
overflow:hidden !important; height: 20em; 
">

   </form>
   
    
   </form>
   <br />
   <br />
   <div align="center">
    <button type="button" class="btn btn-info" id="submit-all">upload</button>
   </div>
       <button id="RefreshPage">Refresh page to see files uploaded</button>
   <br />
   <br />
 
   <div id="preview"></div>
  
   <br />
   <br />
 
  </div>
 </body>
</html>
<script>
$('#RefreshPage').click(function() { 
    	      window.location.reload();
 });
</script>

<script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: false,
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg, .txt, .docx, .pdf, .bat",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
   });
   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getdropuploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
    }
    list_image();
   });
  },
 };

 list_image();

 function list_image()
 {
  $.ajax({
   url:"dropupload.php",
   success:function(data){
    $('#preview').html(data);
   }
  });
 }
 
 

 $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"dropupload.php",
   method:"POST",
   data:{name:name},
   success:function(data)
   
   {
    list_image();
   }
  })
 });
 
});
</script>
