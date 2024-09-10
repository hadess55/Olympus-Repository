<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
//check if current user role is allowed access to the pages
$can_add = $user->canAccess('datapangan/add');
$can_edit = $user->canAccess('datapangan/edit');
$can_view = $user->canAccess('datapangan/view');
$can_delete = $user->canAccess('datapangan/delete');
$pageTitle = 'Data Pangan Details'; //set dynamic page title
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <section class="page" data-page-type="view" data-page-url="<?php echo e(url()->full()); ?>">
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
                            <div class="h5 font-weight-bold text-primary">Data Pangan Details</div>
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
                    <div class="col comp-grid ">
                        <div class=" page-content">
                            <?php
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                        ?>
                            <div id="page-main-content" class=" px-3 mb-3">
                                <div class="page-data">
                                    <!--PageComponentStart-->
                                    <div class="mb-3 row row justify-content-start g-0">
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Id</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['id']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Judul</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['judul']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">File</small>
                                                        <div class="fw-bold">
                                                            <?php
                                                            Html::page_img($data['file'], 'auto', 'auto', '', 1);
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Tahun</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['tahun']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Date Created</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['date_created']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Date Updated</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['date_updated']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Id Kecamatan</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['id_kecamatan']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Kecamatan Id</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['kecamatan_id']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Kecamatan Nama</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['kecamatan_nama']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Kecamatan Date Created</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['kecamatan_date_created']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <small class="text-muted">Kecamatan Date Updated</small>
                                                        <div class="fw-bold">
                                                            <?php echo $data['kecamatan_date_updated']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--PageComponentEnd-->
                                    <div class="d-flex align-items-center gap-2">
                                        <?php if($can_edit){ ?>
                                        <a class="btn btn-sm btn-success has-tooltip " title="Edit"
                                            href="<?php print_link("datapangan/edit/$rec_id"); ?>">
                                            <i class="material-icons">edit</i> Edit
                                        </a>
                                        <?php } ?>
                                        <?php if($can_delete){ ?>
                                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn"
                                            data-prompt-msg="Are you sure you want to delete this record?"
                                            data-display-style="modal" title="Delete" href="<?php print_link("datapangan/delete/$rec_id?redirect=datapangan"); ?>">
                                            <i class="material-icons">delete_sweep</i> Delete
                                        </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                    }
                    else{
                ?>
                            <!-- Empty Record Message -->
                            <div class="text-muted p-3">
                                <i class="material-icons">block</i> No Record Found
                            </div>
                            <?php
                    }
                ?>
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
        <!--pageautofill
        -->
        $(document).ready(function()
        {
        //
        custom
        javascript
        |
        jquery
        codes
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/datapangan/view.blade.php ENDPATH**/ ?>