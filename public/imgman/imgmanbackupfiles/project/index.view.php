<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Upload</title>
    <link rel="stylesheet" href="slick/slick.css" type="text/css">
    <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="style/app.css" type="text/css">
</head>
<body>

<?php if(count($output) > 0): ?>
    <h1>My Photo Gallery</h1>
    <div class="gallery">
        <?php foreach ($output as $file): ?>
            <div><img src="uploads/<?=$file ?>" width="180" height="180"></div>
        <?php endforeach; ?>
    </div>

<?php else: ?>
<h4>You have not uploaded any file</h4>
<?php endif ?>

<p><a href="upload.php">Upload more file</a> </p>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="scripts/slide.js"></script>

</body>
</html>