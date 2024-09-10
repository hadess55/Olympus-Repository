<!DOCTYPE html>
<html>

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" />
    <meta name="author" content="" />
    <meta name="keyword" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/material-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-theme-bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/custom-style.css')); ?>" />
    <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('pagecss'); ?>
</head>

<body>
    
    <div id="main-content">
        <div id="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('appfooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php if(Session::has('success')): ?>
        <div data-show-duration="5000" id="flashmsgholder"
            class="toast-alert row alert bg-success bounce text-white animated fixed-alert" role="alert">
            <div><i class="material-icons">check_circle</i></div>
            <div class="msg"><?php echo e(Session::get('success')); ?></div>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    <?php endif; ?>
    <?php if(Session::has('danger')): ?>
        <div data-show-duration="5000" id="flashmsgholder"
            class="toast-alert row alert bg-danger shake text-white animated fixed-alert" role="alert">
            <div><i class="material-icons">error</i></div>
            <div class="msg"><?php echo e(Session::get('danger')); ?></div>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('pagejs'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\sip\resources\views/layouts/info.blade.php ENDPATH**/ ?>