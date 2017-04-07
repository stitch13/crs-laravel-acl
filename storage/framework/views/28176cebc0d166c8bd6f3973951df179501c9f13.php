<?php $__env->startSection('content-form'); ?>
<div class="container">
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->description); ?></p>
    <br>
    <b>Author: <?php echo e($post->user->name); ?></b>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>