<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$pageTitle = 'Lupa Password'; //set dynamic page title
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <section class="page" data-page-type="add" data-page-url="<?php echo e(url()->full()); ?>">
        <?php
        if( $show_header == false ){
    ?>
        <div class="bg-light p-3 mb-3 mb-3">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto  back-btn-col">
                        <a class="back-btn btn " href="<?php echo e(url()->previous()); ?>">
                            <i class="material-icons">arrow_back</i>
                        </a>
                    </div>
                    <div class="col  ">
                        <div class="">
                            <div class="h5 font-weight-bold text-primary">User registration</div>
                        </div>
                    </div>
                    <div class="col-md-auto comp-grid ">
                        <div class=" ">
                            Sudah punya akun? <a class="btn btn-primary" href="<?php print_link(''); ?>"> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
        <div class="bg-register">
            
            <section class="bg-register">
                <div class="container h-100 p-5">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black"
                                style="border-radius: 25px; background: rgba(255, 255, 255, 0.484); backdrop-filter: blur(5px)">
                                <div class="card-body p-sm-1">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                            
                                            <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4">REGISTER</p>

                                            <form class="mx-1 mx-md-4">
                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <label class="form-label mb-2" for="form3Example1c">Username</label>
                                                        <input id="ctrl-username" data-field="username"
                                                            value="<?php echo get_value('username'); ?>" type="text"
                                                            placeholder="Masukan Username" required="" name="username"
                                                            data-url="componentsdata/users_username_value_exist/"
                                                            data-loading-msg="Checking availability ..."
                                                            data-available-msg="Username Tersedia"
                                                            data-unavailable-msg="Username Tidak Tersedia"
                                                            class="form-control  ctrl-check-duplicate" />
                                                        <div class="check-status"></div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="password">Password</label>
                                                        </div>
                                                        <div class="flex-row">
                                                            <div data-mdb-input-init id="ctrl-password-holder"
                                                                class="input-group">
                                                                <input id="ctrl-password" data-field="password"
                                                                    value="<?php echo get_value('password'); ?>" type="password"
                                                                    placeholder="Masukan Password" required=""
                                                                    name="password"
                                                                    class="form-control password password-strength" />
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary btn-toggle-password">
                                                                    <i class="material-icons">visibility</i>
                                                                </button>
                                                            </div>
                                                            <div class="password-strength-msg">
                                                                <small class="fw-bold">Password harus</small>
                                                                <small class="length chip">Minimal 6 karakter</small>
                                                                <small class="caps chip">Huruf Kapital</small>
                                                                <small class="number chip">Angka</small>
                                                                <small class="special chip">Symbol</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="control-label" for="confirm_password">Konfirmasi
                                                                Password</label>
                                                        </div>
                                                        <div class="flex-row">
                                                            <div data-mdb-input-init id="ctrl-confirm_password-holder"
                                                                class="input-group ">
                                                                <input id="ctrl-password-confirm"
                                                                    data-match="#ctrl-password"
                                                                    class="form-control password-confirm " type="password"
                                                                    name="confirm_password" required
                                                                    placeholder="Konfirmasi Password" />
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary btn-toggle-password">
                                                                    <i class="material-icons">visibility</i>
                                                                </button>
                                                                <div class="invalid-feedback">
                                                                    Password Tidak Sesuai
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <label class="form-label mb-2" for="form3Example4cd">Email</label>
                                                        <input id="ctrl-email" data-field="email"
                                                            value="<?php echo get_value('email'); ?>" type="email"
                                                            placeholder="Masukan Email" required="" name="email"
                                                            data-url="componentsdata/users_email_value_exist/"
                                                            data-loading-msg="Mengecek Ketersediaan ..."
                                                            data-available-msg="Email bisa digunakan"
                                                            data-unavailable-msg="Email sudah digunakan"
                                                            class="form-control  ctrl-check-duplicate" />
                                                        <div class="check-status"></div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <div class="col-sm-4">
                                                            <label class="form-label mb-2"
                                                                for="form3Example4cd">Foto</label>
                                                        </div>
                                                        <div class="flex-row">
                                                            <div data-mdb-input-init id="ctrl-photo-holder"
                                                                class=" ">
                                                                <div class="dropzone " input="#ctrl-photo"
                                                                    fieldname="photo"
                                                                    uploadurl="<?php echo e(url('fileuploader/upload/photo')); ?>"
                                                                    data-multiple="false"
                                                                    dropmsg="Pilih Foto atau Tarik Kesini"
                                                                    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg"
                                                                    filesize="3" maximum="1">
                                                                    <input name="photo" id="ctrl-photo"
                                                                        data-field="photo"
                                                                        class="dropzone-input form-control"
                                                                        value="<?php echo get_value('photo'); ?>" type="text" />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div
                                                                        class="dz-file-limit animated bounceIn text-center text-danger">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-2">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                        <div class="col-sm-4">
                                                            <label class="form-label mb-2"
                                                                for="form3Example4cd">Kecamatan</label>
                                                        </div>
                                                        <div class="flex-row">
                                                            <div data-mdb-input-init id="ctrl-photo-holder"
                                                                class=" ">
                                                                <div id="ctrl-id_kecamatan-holder" class=" ">
                                                                    <select required="" id="ctrl-id_kecamatan"
                                                                        data-field="id_kecamatan" name="id_kecamatan"
                                                                        placeholder="-- Pilih Kecamatan --"
                                                                        class="form-select">
                                                                        <option value="">-- Pilih Kecamatan --
                                                                        </option>
                                                                        <?php 
                                                                    $options = $comp_model->id_kecamatan_option_list() ?? [];
                                                                    foreach($options as $option){
                                                                    $value = $option->value;
                                                                    $label = $option->label ?? $value;
                                                                    $selected = Html::get_field_selected('id_kecamatan', $value, "");
                                                                ?>
                                                                        <option <?php echo $selected; ?>
                                                                            value="<?php echo $value; ?>">
                                                                            <?php echo $label; ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-success btn-md w-100">Daftar</button>
                                                </div>

                                            </form>

                                        </div>
                                        <div
                                            class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="<?php echo e(asset('images/SIP.png')); ?>" class="img-fluid max-width: 10%"
                                                alt="Sample image">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<!-- Page custom css -->
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
<!-- Page custom js -->
<?php $__env->startSection('pagejs'); ?>
    <script>
        <!--pageautofill
        -->
    <!--custom page js--><!--pagejs-->
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/index/register.blade.php ENDPATH**/ ?>