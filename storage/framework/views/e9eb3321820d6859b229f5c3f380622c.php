<?php $__env->startSection('title', __('Hanya Admin Yang Bisa Akses!')); ?>
<?php $__env->startSection('code', '403'); ?>
<?php $__env->startSection('message', __($exception->getMessage() ?: 'Hanya Admin Yang Bisa Akses!')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/errors/403.blade.php ENDPATH**/ ?>