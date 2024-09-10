<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$pageTitle = 'Lupa Password'; //set dynamic page title
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="card text-center justify-content-center" style="width: 500px;">
                <div class="card-header h5 text-white bg-success mt-2">Reset Password</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Masukan alamat Email anda dan kami akan mengirimkan anda email yang berisi instruksi untuk mengatur
                        ulang kata sandi anda.
                    </p>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="flex-row">
                            <label class="form-label mb-2" for="typeEmail">Masukan Email</label>
                            <div data-mdb-input-init class="form-outline mb-3">
                                <input required type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" />
                            </div>
                            <button data-mdb-ripple-init class="btn btn-success w-100" type="submit">Reset
                                password</button>
                        </div>
                        <?php if($errors->has('email')): ?>
                            <div class="alert alert-danger animated bounce"><?php echo e($errors->first('email')); ?></div>
                        <?php endif; ?>
                    </form>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="<?php echo e(url('index/login')); ?>">Login</a>
                        <a href="#">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->startSection('pagecss'); ?>
    <style>
        .bg-register {
            background-image: url('/images/bg/b2.png');
            /* background-color: #58bf39; */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
        }

        < !--custom page css -->< !--pagecss-->
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/passwordreset/forgotpassword.blade.php ENDPATH**/ ?>