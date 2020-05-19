<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Machines')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="<?php echo e(url('/')); ?>" style="margin-right: 5px;">
                    <img src="<?php echo e(url('/images/logo.jpeg')); ?>" width="30" height="30" >
                </a>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="margin-left: 0px;">
                    <?php echo e(config('app.name', 'Machines')); ?>

                </a>
                
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="<?php echo e(url('/home')); ?>">
                                        <?php echo e(__('Menú')); ?>

                                    </a>
                                    
                                    <?php if( Auth::user()->id_permiso <= 2 ): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('nodo_registration')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('nodo-register-form').submit();">
                                            <?php echo e(__('Agregar Nodo')); ?>

                                        </a>
                                        <form id="nodo-register-form" action="<?php echo e(route('nodo_registration')); ?>" method="GET" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('consulta-nodo')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-nodo-form').submit();">
                                        <?php echo e(__('Consultar Nodo')); ?>

                                    </a>
                                    <form id="consulta-nodo-form" action="<?php echo e(route('consulta-nodo')); ?>" method="GET" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                    <?php if( Auth::user()->id_permiso <= 2 ): ?>
                                    <a class="dropdown-item" href="<?php echo e(route('device_registration')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('device-register-form').submit();">
                                            <?php echo e(__('Agregar Equipo')); ?>

                                        </a>
                                        <form id="device-register-form" action="<?php echo e(route('device_registration')); ?>" method="GET" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('consulta-device')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-device-form').submit();">
                                        <?php echo e(__('Consultar Equipo')); ?>

                                    </a>
                                    <form id="consulta-device-form" action="<?php echo e(route('consulta-device')); ?>" method="GET" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                    <?php if( Auth::user()->id_permiso <= 2 ): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('sensor_registration')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('sensor-register-form').submit();">
                                            <?php echo e(__('Agregar Sensor')); ?>

                                        </a>
                                        <form id="sensor-register-form" action="<?php echo e(route('sensor_registration')); ?>" method="GET" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>                                    
                                    <?php endif; ?>

                                    <a class="dropdown-item" href="<?php echo e(route('consulta-sensor')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-sensor-form').submit();">
                                        <?php echo e(__('Consultar Sensor')); ?>

                                    </a>
                                    <form id="consulta-sensor-form" action="<?php echo e(route('consulta-sensor')); ?>" method="GET" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>


                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Machines\resources\views/layouts/app.blade.php ENDPATH**/ ?>