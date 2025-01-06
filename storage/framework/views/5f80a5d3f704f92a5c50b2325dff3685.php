<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title> Portfolio website complete 
        
            <?php echo $__env->yieldContent('title'); ?> 

        </title>
    </head>
    <body>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="l-main">

        <?php echo $__env->yieldContent('content'); ?>
        
    </main>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 
    <!--===== MAIN JS =====-->
    <script src="<?php echo e(asset('script.js')); ?>"></script>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--===== MAIN JS =====-->

    </body>
</html>        <?php /**PATH D:\xampp\htdocs\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>