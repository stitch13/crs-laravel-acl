<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo e(isset($titulo) ? $titulo : 'Painel ACL - Curso de Laravel'); ?></title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!--Fonts-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--CSS-->
        <link rel="stylesheet" href="../../../assets/painel/css/acl-painel.css">

        <!--Favicon-->
        <link rel="icon" type="../../../image/png" href="assets/painel/imgs/favicon-acl.png">
    </head>
    <body>
        <div class="menu">
            <ul class="menu col-md-12">
                <li class="col-md-2 text-center">
                    <a href="/painel">
                        <img src="../../../assets/painel/imgs/acl-branca.png" alt="acl" class="logo">
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/users">
                        <img src="../../../assets/painel/imgs/perfil-acl.png" alt="Meu Perfil" class="img-menu">
                        <h1>Usuários</h1>
                    </a>
                </li>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_post')): ?>
                <li class="col-md-2 text-center">
                    <a href="/painel/posts">
                        <img src="../../../assets/painel/imgs/noticias-acl.png" alt="Estilos" class="img-menu">
                        <h1>Posts</h1>
                    </a>
                </li>
                <?php else: ?>
                <li class="col-md-2 text-center">
                    <img src="../../../assets/painel/imgs/noticias-acl.png" alt="Estilos" class="img-menu">
                    <h1>Not Permission</h1>
                </li>
                <?php endif; ?>
                <li class="col-md-2 text-center">
                    <a href="/painel/roles">
                        <img src="../../../assets/painel/imgs/funcao-acl.png" alt="Albuns" class="img-menu">
                        <h1>Roles</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/permissions">
                        <img src="../../../assets/painel/imgs/permissao-acl.png" alt="Musicas" class="img-menu">
                        <h1>Permissions</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/logout">
                        <img src="../../../assets/painel/imgs/sair-acl.png" alt="Sair" class="img-menu">
                        <h1>Logout</h1>
                    </a>
                </li>
            </ul>
        </div><!--Menu-->

        <div class="clear"></div>

        <!--Content Dinâmico-->
        <?php echo $__env->yieldContent('content'); ?>

        <div class="clear"></div>

        <div class="footer actions">
            <div class="container text-center">
                <p class="footer">EspecializaTi - Todos os direitos reservados</p>
            </div>
        </div>


        <!--jQuery-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>