<?php $__env->startSection('content'); ?>
    <h1>Products</h1>

    <form method="GET" action="<?php echo e(route('products.index')); ?>">
        <input type="text" name="search" placeholder="Search by ID or Description" value="<?php echo e(request('search')); ?>">
        <button type="submit">Search</button>
    </form>

    <a href="<?php echo e(route('products.index', ['sort_by' => 'name', 'order' => 'asc'])); ?>">Sort by Name</a>
    <a href="<?php echo e(route('products.index', ['sort_by' => 'price', 'order' => 'asc'])); ?>">Sort by Price</a>

    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->product_id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->stock); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>">View</a>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\blog\resources\views/index.blade.php ENDPATH**/ ?>