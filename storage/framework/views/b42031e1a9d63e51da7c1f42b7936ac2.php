        <!--
        expose component model to current view
        e.g $arrDataFromDb = $comp_model->fetchData(); //function name
        -->
        <?php $comp_model = app('App\Models\ComponentsData'); ?>
        <?php
        $pageTitle = 'SIP'; // set page title
        ?>
        
        <?php $__env->startSection('title', $pageTitle); ?>
        <?php $__env->startSection('content'); ?>
            

            
            <!-- Section: Design Block -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start bg-login">
                <div class="container" style="display: flex; justify-content: center; align-items: center;">
                    <div class="card" style="">
                        <div class="p-4">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <img src="<?php echo e(asset('images/SIP.png')); ?>" class="img-fluid max-width: 30%">
                                </div>

                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="card">
                                        <div class="card-body py-5 px-md-5">
                                            <?php if($errors->any()): ?>
                                                <div class="alert alert-danger animated bounce"><?php echo e($errors->first()); ?></div>
                                            <?php endif; ?>
                                            <form name="loginForm" action="<?php echo e(route('auth.login')); ?>"
                                                class="needs-validation form page-form" method="post">
                                                <?php echo csrf_field(); ?>
                                                <!-- Email input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <label class="form-label mb-2" for="form3Example3">Username</label>
                                                    <input placeholder="Username" type="text" id="username"
                                                        class="form-control" name="username" required="required"
                                                        type="text" />
                                                </div>

                                                <!-- Password input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <label class="form-label mb-2" for="form3Example4">Password</label>
                                                    <input type="password" id="password" class="form-control"
                                                        placeholder="Password" type="password" name="password"
                                                        required="required" />

                                                </div>

                                                <!-- Checkbox -->
                                                <div class="form-check d-flex justify-content-left mb-4">
                                                    <input class="form-check-input me-2" type="checkbox" value="true"
                                                        id="form2Example33" checked name="rememberme" />
                                                    <label class="form-check-label" for="form2Example33">
                                                        Ingat saya
                                                    </label>
                                                </div>

                                                <!-- Submit button -->
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-dark w-100 mb-4">
                                                    Masuk
                                                </button>

                                                <!-- Register & Lupa Password -->
                                                <div style="display: flex; justify-content: space-between;">
                                                    <a href="<?php echo e(route('password.forgotpassword')); ?>" class="text-danger">
                                                        <p style="margin: 0;">Lupa Password?</p>
                                                    </a>
                                                    <a href="<?php echo e(route('auth.register')); ?>" class="text-warning">
                                                        <p style="margin: 0;">Daftar</p>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>
        <!-- Page custom css -->
        <?php $__env->startSection('pagecss'); ?>
            <style>
                .bg-login {
                    background-image: url('/images/bg/b2.png');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    width: 100%;
                    height: 100vh;
                }

                .card {
                    background: rgba(255, 255, 255, 0.16);
                    backdrop-filter: blur(10px);
                    /* width: 50rem; */
                    alig
                }
            </style>
        <?php $__env->stopSection(); ?>
        <!-- Page custom js -->
        <?php $__env->startSection('pagejs'); ?>
            <script>
                $(document).ready(function() {
                    // custom javascript | jquery codes
                });
            </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/index/index.blade.php ENDPATH**/ ?>