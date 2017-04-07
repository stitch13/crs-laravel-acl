<?php $__env->startSection('content-form'); ?>
<form class="login form" role="form" method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo e(csrf_field()); ?>


    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

            <?php if($errors->has('name')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
            <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

            <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
            <?php endif; ?>
    </div>

    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

            <input id="password" type="password" class="form-control" name="password" required>

            <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
            <?php endif; ?>
    </div>

    <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>

    <div class="form-group">
            <button type="submit" class="btn btn-login">
                Registrar
            </button>
        </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>