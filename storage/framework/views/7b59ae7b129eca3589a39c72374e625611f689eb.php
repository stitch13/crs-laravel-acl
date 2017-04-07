<div class="container">
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_post', $post)): ?>
        <h1><?php echo e($post->title); ?></h1>
        <p><?php echo e($post->description); ?></p>
        <br>
        <b>Author: <?php echo e($post->user->name); ?></b>
        <a href="<?php echo e("/post/$post->id/update"); ?>">Editar</a>
    <?php endif; ?>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>Nenhum post cadastrado !!!</p>
    <?php endif; ?>
</div>
