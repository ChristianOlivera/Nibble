<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title); ?> - NIBBLE</title>
    <link rel="icon" href="<?php echo e(url('img/favicon.png')); ?>" type="image/png">
    <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><h1>NIBBLE</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav text-end px-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('menu')); ?>">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('news.index')); ?>">Novedades</a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a id="register-button" class="nav-link" href="<?php echo e(route('auth.register.form')); ?>">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a id="login-button" class="nav-link" href="<?php echo e(route('auth.login.form')); ?>">Iniciar Sesión</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('reservations.create.form')); ?>">Reservar</a>
                        </li>
                        <?php if(auth()->user()->isAdmin()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('admin.users.index')); ?>"><i class="fa-solid fa-users"></i> Administrar Usuarios</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <form action="<?php echo e(route('auth.logout.process')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="nav-link"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesión</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="position-absolute bot-0 end-0">
            <?php if(session()->has('feedback.message')): ?>
                <div class="alert alert-<?php echo e(session()->get('feedback.type', 'success')); ?> alert-dismissible fade show text-center" role="alert">
                    <?php echo e(session()->get('feedback.message')); ?>

                    <button type="button" class="btn-close fs-6" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>

        <?php echo e($slot); ?>

    </main>

    <footer>
        <div class="footer-info">
            <a class="logo-footer" href="<?php echo e(route('home')); ?>"></a>
            <div class="social">
                <p>Seguinos en nuestras redes:</p>
                <ul>
                    <li><a href="https://www.facebook.com" target="blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com" target="blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.twitter.com" target="blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <p>NIBBLE &copy; Christian Olivera</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/48f4d87eaa.js" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\Final\resources\views/components/layout.blade.php ENDPATH**/ ?>