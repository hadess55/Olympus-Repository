<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$pageTitle = 'Tambah Data Pangan'; //set dynamic page title
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
                            <div class="h5 font-weight-bold text-success">Tambah Data Pangan</div>
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
                            <form id="datapangan-add-form" role="form" novalidate enctype="multipart/form-data"
                                class="form page-form form-horizontal needs-validation"
                                action="<?php echo e(route('datapangan.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="judul">Judul <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-judul-holder" class=" ">
                                                    <input id="ctrl-judul" data-field="judul" value="<?php echo get_value('judul'); ?>"
                                                        type="text" placeholder="Enter Judul" required=""
                                                        name="judul" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="file">File <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-file-holder" class=" ">
                                                    <div class="dropzone required" input="#ctrl-file" fieldname="file"
                                                        uploadurl="<?php echo e(url('fileuploader/upload/file')); ?>"
                                                        data-multiple="false" dropmsg="Choose files or drop files here"
                                                        btntext="Browse"
                                                        extensions=".docx,.doc,.xls,.xlsx,.xml,.csv,.pdf,.xps"
                                                        filesize="3" maximum="1">
                                                        <input name="file" id="ctrl-file" data-field="file"
                                                            required="" class="dropzone-input form-control"
                                                            value="<?php echo get_value('file'); ?>" type="text" />
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
                                                <label class="control-label" for="tahun">Tahun <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-tahun-holder" class="input-group ">
                                                    <input id="ctrl-tahun" data-field="tahun"
                                                        class="form-control datepicker  datepicker" required=""
                                                        value="<?php echo get_value('tahun'); ?>" type="datetime" name="tahun"
                                                        placeholder="Enter Tahun" data-enable-time="false" data-min-date=""
                                                        data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y"
                                                        data-inline="false" data-no-calendar="false" data-mode="single" />
                                                    <span class="input-group-text"><i
                                                            class="material-icons">date_range</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="id_kecamatan">Kecamatan <span
                                                        class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-id_kecamatan-holder" class=" ">
                                                    <select required="" id="ctrl-id_kecamatan"
                                                        data-field="id_kecamatan" name="id_kecamatan"
                                                        placeholder="Select a value ..." class="form-select">
                                                        <option value="">- Pilih Kecamatan -</option>
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

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/datapangan/add.blade.php ENDPATH**/ ?>