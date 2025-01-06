<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
        <!-- ======= Styles ====== -->
        <link rel="stylesheet" href="<?php echo e(asset('css/admin_style.css')); ?>">
</head>
<body>
    

<?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>






<!-- =========== Scripts =========  -->
<script src="<?php echo e(asset('js/main.js')); ?>"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html><?php /**PATH D:\xampp\htdocs\blog\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>