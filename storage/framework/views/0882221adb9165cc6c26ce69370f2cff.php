<h1>Upload File</h1>
<style>
    input[type="file"] {
        display: none;
    }
    .file-upload {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .file-upload:hover {
        background-color: #3e8e41;
    }

</style>
<form action="<?php echo e(route('upload')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="document" id="document" onchange="document.getElementById('file-name').innerText = this.files[0].name">
    <span id="file-name"></span>
    <br>
    <button type="submit">Upload</button>
</form>
<?php if(session()->has('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\pmway\resources\views\documents\upload.blade.php ENDPATH**/ ?>