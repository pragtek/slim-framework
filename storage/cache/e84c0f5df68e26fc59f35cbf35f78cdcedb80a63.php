

<?php $__env->startSection('content'); ?>
    <div>
        Home Page

        <?php echo e($user->name); ?> <?php echo e($user->email); ?> <?php echo e($user->password); ?>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp-8-2-4\htdocs\slim-crud\resources\views/auth/home.blade.php ENDPATH**/ ?>