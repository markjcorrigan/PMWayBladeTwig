<?php $__env->startSection('admin'); ?>

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <a href="" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#varyingModal" >
            Add Experience</a>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">My Experiences </h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Title</th>
        <th>Institution</th>
        <th>From Year</th>
        <th>To Year</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e(Str::title($experience->resume_title)); ?></td>
                <td><?php echo e(Str::title($experience->institution)); ?></td>
                <td><?php echo e($experience->from_year); ?></td>
                <td><?php echo e($experience->to_year); ?></td>
                <td>
                    <a href="#" id="<?php echo e($experience->id); ?>" data-bs-toggle="modal" data-bs-target="#EditExperienceModal"  class="btn btn-inverse-light editExp" style="margin-right: 10px;">Edit</a>
                    <a href="<?php echo e(route('delete.experience', [$experience->id])); ?>" id="delete"  class="btn btn-inverse-danger">Delete</a>
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


<div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Add Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('store.experience')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="resume_cat" value="experience">
            <div class="mb-3">
              <label for="title" class="form-label">Title:</label>
              <input type="text" class="form-control" name="resume_title" placeholder="Lead Developer" required>
            </div>
            
            <div class="mb-3">
                <label for="organization" class="form-label">Organization:</label>
                <input type="text" class="form-control" name="institution" placeholder="Blockdots, London" required>
            </div>

            <div class="mb-3">
                <label for="from" class="form-label">From Year:</label>
                <input type="text" class="form-control" name="from_year" placeholder="2022" required>
            </div>

            <div class="mb-3">
                <label for="to" class="form-label">To Year:</label>
                <input type="text" class="form-control" name="to_year" placeholder="Present" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Experience</button>
              </div>

          </form>
        </div>
       
      </div>
    </div>
</div>


<div class="modal fade" id="EditExperienceModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="varyingModalLabel">Edit Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo e(route('update.experience')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="resume_cat" value="experience">
            <input type="hidden" name="exp_id" id="exp_id">
            <div class="mb-3">
              <label for="title" class="form-label">Title:</label>
              <input type="text" class="form-control" name="resume_title" id="resume_title" required>
            </div>
            
            <div class="mb-3">
                <label for="organization" class="form-label">Organization:</label>
                <input type="text" class="form-control" name="institution" id="institution" required>
            </div>

            <div class="mb-3">
                <label for="from" class="form-label">From Year:</label>
                <input type="text" class="form-control" name="from_year" id="from_year" required>
            </div>

            <div class="mb-3">
                <label for="to" class="form-label">To Year:</label>
                <input type="text" class="form-control" name="to_year" id="to_year" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Experience</button>
              </div>

          </form>
        </div>
       
      </div>
    </div>
</div>

<script>
    $(document).on('click', '.editExp', function(e){
        e.preventDefault();
        let id = $(this).attr('id');
        
        // Send edit exp ajax request
        $.ajax({
            url: 'edit-experience/'+id,
            method: 'GET',
            dataType: 'json',
            success: function(result){
                $('#resume_title').val(result.resume_title);
                $('#institution').val(result.institution);
                $('#from_year').val(result.from_year);
                $('#to_year').val(result.to_year);
                $('#exp_id').val(result.id);
            }
        });
        
    });
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\resume\my_experience.blade.php ENDPATH**/ ?>