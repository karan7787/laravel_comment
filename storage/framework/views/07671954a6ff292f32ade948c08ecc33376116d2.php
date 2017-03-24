<?php $__env->startSection('content'); ?>

   <div class="col-sm-8 blog-main">


			<div class="card">
				<div class="card-block">
					<form method="POST" action="/store/<?php echo e($comment->id); ?>">
					<?php echo e(csrf_field()); ?>

						<div class="form-group">
						  <textarea name="body" placeholder="Enter Your Reply" class="form-control"> 

						  </textarea>
						</div>

						<div class="form-group">
						<button type="submit" class="btn btn-primary "> Add reply </button>
						</div>
     </form>
			
</div>
      <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    </div>
  </div>
  </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>