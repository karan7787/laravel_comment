<?php $__env->startSection('content'); ?>

<div class="col-sm-8 blog-main">
<h1> Publish a Post</h1>
<hr>
<form method="Post" action="/posts">
<?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="text" class="form-control" id="body" name="body">
    </textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>

  	<?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>