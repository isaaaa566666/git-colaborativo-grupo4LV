<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Mi Aplicación'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?> 
</head>
<body class="bg-gray-100 min-h-screen text-gray-800">

    <nav class="bg-blue-600 text-white px-6 py-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Mi Proyecto Laravel</h1>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">Inicio</a></li>
                <li><a href="/edad" class="hover:underline">Calculadora de Edad</a></li>
                
            </ul>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-gray-200 text-center text-sm py-4 mt-12">
        © <?php echo e(date('Y')); ?> Mi Proyecto Laravel
    </footer>

</body>
</html>
<?php /**PATH C:\Users\USUARIO\git-colaborativo-grupo4LV\resources\views/layouts/app.blade.php ENDPATH**/ ?>