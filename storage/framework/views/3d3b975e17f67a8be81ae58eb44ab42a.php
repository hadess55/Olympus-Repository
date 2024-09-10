<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$pageTitle = 'Tambah Kecamatan'; //set dynamic page title
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
                            <div class="h5 font-weight-bold text-success">Tambah Kecamatan</div>
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
                            <form id="kecamatan-add-form" role="form" novalidate enctype="multipart/form-data"
                                class="form page-form form-horizontal needs-validation"
                                action="<?php echo e(route('kecamatan.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="nama">Nama Kecamatan<span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-nama-holder" class=" ">
                                                    <input id="ctrl-nama" data-field="nama" value="<?php echo get_value('nama'); ?>"
                                                        type="number" placeholder="Nama Kecamatan" step="any"
                                                        required="" name="nama" class="form-control " />
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

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/kecamatan/add.blade.php ENDPATH**/ ?>