<?php $__env->startSection('content'); ?>

<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div><!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        List Roles
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Label</th>
            <th width="150px">Ações</th>
        </tr>

        <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($role->name); ?></td>
            <td><?php echo e($role->label); ?></td>
            <td>
                <a href="../painel/role/<?php echo e($role->id); ?>/permissions" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="../painel/role/<?php echo e($role->id); ?>/edit" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="../painel/role/<?php echo e($role->id); ?>/delete" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="90">
                <p>Nenhum resultado!</p>
            </td>
        </tr>
        <?php endif; ?>
    </table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>