<?php $__env->startComponent('mail::message'); ?>
# Introduction

Thank You so much for Registering!
<?php $__env->startComponent('mail::button', ['url' => 'https://laracasts.com']); ?>
Start Browsing
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::panel', ['url' => 'https://www.nasa.gov/feature/top-15-earth-images-of-2015/']); ?>
Some amazing NASA Images to go here:) 
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
