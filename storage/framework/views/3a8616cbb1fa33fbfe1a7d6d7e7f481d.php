<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
//check if current user role is allowed access to the pages
$can_add = $user->canAccess('users/add');
$can_edit = $user->canAccess('users/edit');
$can_view = $user->canAccess('users/view');
$can_delete = $user->canAccess('users/delete');
$pageTitle = 'My Account'; //set dynamic page title
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <section class="page" data-page-type="view" data-page-url="<?php echo e(url()->full()); ?>">
        <div class="">
            <div class="container">
                <div class="row ">
                    <div class="col comp-grid ">
                        <div class=" page-content">
                            <?php
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                        ?>
                            <div class="bg-success m-2 mb-4">
                                <div class="profile">
                                    <div class="avatar">
                                        <?php
                                        $user_photo = $user->UserPhoto();
                                        if ($user_photo) {
                                            Html::page_img($user_photo, 100, 100, 'small', 'large');
                                        }
                                        ?>
                                    </div>
                                    <h1 class="title mt-4"><?php echo $data['username']; ?></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mx-3 mb-3">
                                        <ul class="nav nav-pills flex-column text-left">
                                            <li class="nav-item">
                                                <a data-bs-toggle="tab" href="#AccountPageView" class="nav-link active">
                                                    <i class="material-icons">account_box</i> Account Detail
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-bs-toggle="tab" href="#AccountPageEdit" class="nav-link">
                                                    <i class="material-icons">edit</i> Edit Account
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-bs-toggle="tab" href="#AccountPageChangePassword" class="nav-link">
                                                    <i class="material-icons">lock</i> Change Password
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="mb-3">
                                        <div class="tab-content">
                                            <div class="tab-pane show active fade" id="AccountPageView" role="tabpanel">
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
                                                                        <small class="text-muted">Username</small>
                                                                        <div class="fw-bold">
                                                                            <?php echo $data['username']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <small class="text-muted">Email</small>
                                                                        <div class="fw-bold">
                                                                            <?php echo $data['email']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <small class="text-muted">User Role Id</small>
                                                                        <div class="fw-bold">
                                                                            <a size="sm"
                                                                                class="btn btn-sm btn btn-secondary page-modal"
                                                                                href="<?php print_link("roles/view/$data[user_role_id]?subpage=1"); ?>">
                                                                                <i class="material-icons">visibility</i>
                                                                                <?php echo 'Roles Detail'; ?>
                                                                            </a>
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
                                                    </div>
                                                    <!--PageComponentEnd-->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="AccountPageEdit" role="tabpanel">
                                                <div class=" reset-grids">
                                                    <?php if (isset($component)) { $__componentOriginal9f21a7b3272a8177b4f1b99d9aec464a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f21a7b3272a8177b4f1b99d9aec464a = $attributes; } ?>
<?php $component = App\View\Components\SubPage::resolve(['url' => ''.e(url('account/edit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\SubPage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f21a7b3272a8177b4f1b99d9aec464a)): ?>
<?php $attributes = $__attributesOriginal9f21a7b3272a8177b4f1b99d9aec464a; ?>
<?php unset($__attributesOriginal9f21a7b3272a8177b4f1b99d9aec464a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f21a7b3272a8177b4f1b99d9aec464a)): ?>
<?php $component = $__componentOriginal9f21a7b3272a8177b4f1b99d9aec464a; ?>
<?php unset($__componentOriginal9f21a7b3272a8177b4f1b99d9aec464a); ?>
<?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="AccountPageChangePassword" role="tabpanel">
                                                <div class=" reset-grids">
                                                    <?php echo $__env->make('pages.account.changepassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                        </div>
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
        <!--custom page css
        -->
    <!--pagecss-->
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

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/account/view.blade.php ENDPATH**/ ?>