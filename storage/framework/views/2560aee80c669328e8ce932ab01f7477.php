<?php $__env->startSection('admin'); ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">All Comments </h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Post Title</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Comment</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td> <?php echo Str::wordWrap($comment['post']['post_title'], 20, '<br />'); ?> </td>
            <td><?php echo e($comment->user_name); ?></td>
            <td><?php echo e($comment->user_email); ?></td>
            <td><?php echo Str::wordWrap($comment->comment, 40, '<br />'); ?></td>
            <td>
                <div class="form-check form-switch mb-2">
                    <input type="checkbox" class="form-check-input status-button" data-comment-id="<?php echo e($comment->id); ?>" <?php echo e($comment->status ? 'checked' : ''); ?>>
                </div>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </tbody>
  </table>
</div>
</div>
</div>
    </div>
</div>

<script>
    $(document).on('change', '.status-button', function(){
        let comment_id = $(this).data('comment-id');
        let is_checked = $(this).is(':checked');
        console.log('Comment ID: ' + comment_id);
        console.log('Status: ' + is_checked);
        // Send an ajax request to activate or deactivate a comment
        $.ajax({
            url: "<?php echo e(route('comment.status.update')); ?>",
            method: "POST",
            data: {_token:"<?php echo e(csrf_token()); ?>", comment_id:comment_id, status:is_checked ? 1 : 0},
            dataType: "json",
            success: function(result){
                console.log('AJAX request successful');
                console.log(result);
                if(result.status == 200){
                    toastr.success('Comment status updated successfully!');
                }
            },
            error: function(xhr, status, error){
                console.log('AJAX request failed');
                console.log(xhr.responseText);
            }
        });
    });

</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\comment\comments.blade.php ENDPATH**/ ?>