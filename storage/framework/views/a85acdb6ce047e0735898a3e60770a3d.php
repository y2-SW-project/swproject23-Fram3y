<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/8c4bde81e2.js" crossorigin="anonymous"></script>

    <!-- BootStrap Icons -->
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" />

    <title>Presto Films</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>



<body class="bg-primary">
    <div class="d-flex justify-content-center text-light mt-4">
        <h1>Welcome to Presto</h1>
    </div>
    <div class="d-flex justify-content-center text-light mx-3">

        <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('login')); ?>" class="text-light">Log in</a>
            <a href="<?php echo e(route('register')); ?>" class="text-light">Register</a>

        </div>
        <div class="d-flex justify-content-center text-light mx-3">

        </div>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <?php echo e(__('Logout')); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    <?php endif; ?>




    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    

    

    
</body>

</html>
<?php /**PATH C:\laravel\software\laravel-bootstrap\resources\views/welcome.blade.php ENDPATH**/ ?>