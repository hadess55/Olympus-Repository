<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$pageTitle = 'Add New User'; //set dynamic page title
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <section class="page" data-page-type="add" data-page-url="<?php echo e(url()->full()); ?>">
        <?php
        if( $show_header == true ){
    ?>
        <div class="bg-light p-3 mb-3">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto  back-btn-col">
                        <a class="back-btn btn " href="<?php echo e(url()->previous()); ?>">
                            <i class="material-icons">arrow_back</i>
                        </a>
                    </div>
                    <div class="col  ">
                        <div class="">
                            <div class="h5 font-weight-bold text-success">Tambah User</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
        <div class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-9 comp-grid ">
                        <div class="card card-1 border rounded page-content">
                            <!--[form-start]-->
                            <form id="users-add-form" role="form" novalidate enctype="multipart/form-data"
                                class="form page-form form-horizontal needs-validation" action="<?php echo e(route('users.store')); ?>"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="username">Username <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-username-holder" class=" ">
                                                    <input id="ctrl-username" data-field="username"
                                                        value="<?php echo get_value('username'); ?>" type="text" placeholder="Username"
                                                        required="" name="username"
                                                        data-url="componentsdata/users_username_value_exist/"
                                                        data-loading-msg="Checking availability ..."
                                                        data-available-msg="Available" data-unavailable-msg="Not available"
                                                        class="form-control  ctrl-check-duplicate" />
                                                    <div class="check-status"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="password">Password <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-password-holder" class="input-group ">
                                                    <input id="ctrl-password" data-field="password"
                                                        value="<?php echo get_value('password'); ?>" type="password" placeholder="Password"
                                                        required="" name="password"
                                                        class="form-control  password password-strength" />
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-toggle-password">
                                                        <i class="material-icons">visibility</i>
                                                    </button>
                                                </div>
                                                <div class="password-strength-msg">
                                                    <small class="fw-bold">Should contain</small>
                                                    <small class="length chip">6 Characters minimum</small>
                                                    <small class="caps chip">Capital Letter</small>
                                                    <small class="number chip">Number</small>
                                                    <small class="special chip">Symbol</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="confirm_password">Confirm Password <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-confirm_password-holder" class="input-group ">
                                                    <input id="ctrl-password-confirm" data-match="#ctrl-password"
                                                        class="form-control password-confirm " type="password"
                                                        name="confirm_password" required placeholder="Confirm Password" />
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-toggle-password">
                                                        <i class="material-icons">visibility</i>
                                                    </button>
                                                    <div class="invalid-feedback">
                                                        Password does not match
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="email">Email <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-email-holder" class=" ">
                                                    <input id="ctrl-email" data-field="email" value="<?php echo get_value('email'); ?>"
                                                        type="email" placeholder="Enter Email" required=""
                                                        name="email" data-url="componentsdata/users_email_value_exist/"
                                                        data-loading-msg="Checking availability ..."
                                                        data-available-msg="Available"
                                                        data-unavailable-msg="Not available"
                                                        class="form-control  ctrl-check-duplicate" />
                                                    <div class="check-status"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="photo">Photo </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-photo-holder" class=" ">
                                                    <div class="dropzone " input="#ctrl-photo" fieldname="photo"
                                                        uploadurl="<?php echo e(url('fileuploader/upload/photo')); ?>"
                                                        data-multiple="false" dropmsg="Choose files or drop files here"
                                                        btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3"
                                                        maximum="1">
                                                        <input name="photo" id="ctrl-photo" data-field="photo"
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
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="user_role_id">User Role</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-user_role_id-holder" class=" ">
                                                    <select id="ctrl-user_role_id" data-field="user_role_id"
                                                        name="user_role_id" placeholder="- Pilih Role -"
                                                        class="form-select">
                                                        <option value="">- Pilih Role -</option>
                                                        <?php 
                                                    $options = $comp_model->role_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('user_role_id', $value, "");
                                                ?>
                                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
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
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_kecamatan">Kecamatan <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-id_kecamatan-holder" class=" ">
                                                    <select required="" id="ctrl-id_kecamatan"
                                                        data-field="id_kecamatan" name="id_kecamatan"
                                                        placeholder="Select a value ..." class="form-select">
                                                        <option value="">- Pilih Kecamatan</option>
                                                        <?php 
                                                    $options = $comp_model->id_kecamatan_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('id_kecamatan', $value, "");
                                                ?>
                                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
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
                                <div class="form-ajax-status"></div>
                                <!--[form-button-start]-->
                                <div class="form-group form-submit-btn-holder text-center mt-3">
                                    <button class="btn btn-success" type="submit">
                                        Submit
                                        <i class="material-icons">send</i>
                                    </button>
                                </div>
                                <!--[form-button-end]-->
                            </form>
                            <!--[form-end]-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<!-- Page custom css -->
<?php $__env->startSection('pagecss'); ?>
    <style>

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

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/users/add.blade.php ENDPATH**/ ?>