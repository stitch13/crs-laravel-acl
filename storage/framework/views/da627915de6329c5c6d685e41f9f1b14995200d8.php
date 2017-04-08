<?php $__env->startSection('content'); ?>
<div class="relatorios">
    <div class="container">
        <ul class="relatorios">
            <li class="col-md-6 text-center">
                <a href="/painel/posts">
                    <img src="../../assets/painel/imgs/noticias-acl.png" alt="Estilos" class="img-menu">
                    <h1><?php echo e($totalPosts); ?></h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/roles">
                    <img src="../../assets/painel/imgs/funcao-acl.png" alt="Albuns" class="img-menu">
                    <h1><?php echo e($totalRoles); ?></h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/permissions">
                    <img src="../../assets/painel/imgs/permissao-acl.png" alt="Musicas" class="img-menu">
                    <h1><?php echo e($totalPermissions); ?></h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="/painel/users">
                    <img src="../../assets/painel/imgs/perfil-acl.png" alt="Meu Perfil" class="img-menu">
                    <h1><?php echo e($totalPosts); ?></h1>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('painel.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>