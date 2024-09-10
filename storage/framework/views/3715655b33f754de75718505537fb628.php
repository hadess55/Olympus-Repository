<?php $comp_model = app('App\Models\ComponentsData'); ?>

<?php
$pageTitle = 'Sistem Informasi Pangan'; // set dynamic page title
?>



<?php $__env->startSection('title', $pageTitle); ?>

<?php $__env->startSection('content'); ?>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="info d-flex align-items-center">
                        <div class="info-item text-white mx-4">
                            <i class="bi bi-geo-alt text-warning"></i> DISPERTAPA Kabupaten Blitar
                        </div>
                        <div class="info-item text-white mx-5">
                            <i class="bi bi-telephone text-warning"></i> (0342) 801592
                        </div>
                        <div class="info-item text-white mx-5">
                            <i class="bi bi-envelope text-warning"></i> dispertablitar@blitarkab.go.id
                        </div>
                        <div class="info-item text-white mx-4">
                            <i class="bi bi-map text-warning"></i> Jl. A.Yani No.25 Blitar
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="topbar" class="navbar navbar-expand-md navbar-dark bg-dark p-3">
            <a class="navbar-brand" href="/home">
                <img class="img-responsive" src="<?php echo e(asset('images/logo.png')); ?>" />
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target=".navbar-responsive-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-3">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>"><i
                                class="bi bi-house-door"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('data-pangan-public') ? 'active' : ''); ?>"
                            href="<?php echo e(url('data-pangan-public')); ?>"><i class="bi bi-graph-up"></i> Data Pangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('nbmpublic') ? 'active' : ''); ?>" href="<?php echo e(url('nbmpublic')); ?>"><i
                                class="bi bi-bar-chart"></i> NBM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::is('publikasi-pangan-public') ? 'active' : ''); ?>"
                            href="<?php echo e(url('publikasi-pangan-public')); ?>"><i class="bi bi-journal"></i> Publikasi Pangan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" href="#"><i class="bi bi-tag"></i> Data harga</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(url('hargaprodusen-public')); ?>">Harga
                                    Produsen</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('hargakonsumen-public')); ?>">Harga
                                    Konsumen</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="<?php echo e(url('index/login')); ?>" class="btn btn-login ms-3 ml-3"><i
                        class="bi bi-box-arrow-in-right ml-3"></i>Login</a>
            </div>
        </div>
    </div>
    <div>
        <!-- Isi -->
        <div class="header-image">
            <h1>HARGA KONSUMEN</h1>
            <nav>
                <a href="<?php echo e(url('/')); ?>">BERANDA</a> > <a href="<?php echo e(url('/hargakonsumen-public')); ?>">HARGA
                    KONSUMEN</a>
            </nav>
        </div>
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col comp-grid">
                        <div class="page-content">
                            <div id="datapangan-list-records">
                                <div id="page-main-content" class="table-responsive">
                                    <div class="filter-tags mb-2">
                                        <?php echo Html::filter_tag('search', __('Search')); ?>

                                    </div>
                                    <section class="page" data-page-type="list" data-page-url="<?php echo e(url()->full()); ?>">
                                        <?php if($show_header == true): ?>
                                            <div class="bg-light p-3 mb-3">
                                                <div class="container-fluid">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <form method="get" action=""
                                                                class="form d-flex align-items-center gap-3">
                                                                <!-- Filter Kecamatan -->
                                                                <div class="card mb-2 p-2 flex-grow-1">
                                                                    <div class="fw-bold mb-1">Filter Kecamatan</div>
                                                                    <select name="id_kecamatan" class="form-select">
                                                                        <option value="">--pilih kecamatan--</option>
                                                                        <?php $__currentLoopData = $id_kecamatan_option_list ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($option->value); ?>"
                                                                                <?php echo e(Html::get_field_selected('id_kecamatan', $option->value)); ?>>
                                                                                <?php echo e($option->label ?? $option->value); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                </div>

                                                                <!-- Filter Tanggal -->
                                                                <div class="card mb-2 p-2 flex-grow-1">
                                                                    <div class="fw-bold mb-1">Filter Tanggal</div>
                                                                    <input class="form-control datepicker"
                                                                        value="<?php echo e(get_value('tanggal')); ?>" type="datetime"
                                                                        name="tanggal" placeholder="Pilih Tanggal"
                                                                        data-enable-time="" data-date-format="Y-m-d"
                                                                        data-alt-format="M j, Y" data-inline="false"
                                                                        data-no-calendar="false" data-mode="range" />
                                                                </div>

                                                                <!-- Tombol Filter -->
                                                                <button class="btn btn-success mb-2">Filter</button>
                                                            </form>
                                                        </div>

                                                        <!-- Form Search -->
                                                        <div class="col-md-3">
                                                            <form class="search d-flex" action="<?php echo e(url()->current()); ?>"
                                                                method="get">
                                                                <input type="hidden" name="page" value="1" />
                                                                <input value="<?php echo e(get_value('search')); ?>"
                                                                    class="form-control" type="text" name="search"
                                                                    placeholder="Search" />
                                                                <button class="btn btn-success ms-1"><i
                                                                        class="material-icons">search</i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="">
                                            <div class="container-fluid">
                                                <div class="row ">
                                                    <div class="col comp-grid ">
                                                        <div class=" page-content">
                                                            <div id="hargaprodusen-harga_produsen_saya-records">
                                                                <div id="page-main-content" class="table-responsive">

                                                                    <div class="filter-tags mb-2">
                                                                        <?php echo Html::filter_tag('search', __('Search')); ?>

                                                                        <!-- Page filter list goes here -->
                                                                    </div>

                                                                    <div class="table-responsive">
                                                                        <table id="harga-konsumen" class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kecamatan</th>
                                                                                    <th>Tahun</th>
                                                                                    <th>Gkp Petani</th>
                                                                                    <th>Gkg Penggilingan</th>
                                                                                    <th>Beras Premium</th>
                                                                                    <th>Beras Medium</th>
                                                                                    <th>Jagung Pipilan Kering</th>
                                                                                    <th>Ubi Kayu</th>
                                                                                    <th>Ubi Jalar</th>
                                                                                    <th>Kedelai Lokal Kering</th>
                                                                                    <th>Cabe Besar</th>
                                                                                    <th>Cabe Rawit Merah</th>
                                                                                    <th>Cabe Keriting</th>
                                                                                    <th>Bawang Merah</th>
                                                                                    <th>Daging Ayam</th>
                                                                                    <th>Daging Sapi</th>
                                                                                    <th>Telur Ayam Ras</th>
                                                                                    <th>Pisang</th>
                                                                                    <th>Jeruk</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php $__currentLoopData = $hargaKonsumen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <tr>
                                                                                        
                                                                                        <td><?php echo e($data->kecamatan->nama); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(date('d-m-Y', strtotime($data->tanggal))); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->gkp_petani, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->gkg_penggilingan, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->beras_premium, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->beras_medium, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->jagung_pipilan_kering, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->ubi_kayu, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->ubi_jalar, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->kedelai_lokal_kering, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->cabe_besar, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->cabe_rawit_merah, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->cabe_keriting, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->bawang_merah, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->daging_ayam, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->daging_sapi, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->telur_ayam_ras, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->pisang, 'en-ID')); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(to_currency($data->jeruk, 'en-ID')); ?>

                                                                                        </td>
                                                                                    </tr>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </tbody>
                                                                        </table>
                                                                        <div class="mt-3">
                                                                            <?php echo e($hargaKonsumen->links()); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagecss'); ?>
    <style>
        .header-image {
            position: relative;
            background-image: url('images/sayuran.jpg');
            background-size: cover;
            background-position: center;
            padding: 60px 20px;
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }

        .header-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .header-image h1,
        .header-image nav {
            position: relative;
            z-index: 2;
        }

        .header-image h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
        }

        .header-image nav {
            margin-top: 10px;
            font-size: 1.2em;
        }

        .header-image nav a {
            color: #FFFFFF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .header-image nav a:first-child {
            color: #FFFFFF;
        }

        .header-image nav a:first-child:hover {
            color: #FFD700;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .header-image nav a:last-child {
            color: #00FF00;
        }

        .header-image nav a:last-child:hover {
            color: #00CC00;
            text-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }

        .btn-login {
            margin-right: 5px;
            background-color: white;
            color: black;
            border-radius: 20px;
            padding: 5px 28px;
        }

        .btn-login:hover {
            background-color: #f8f9fa;
            color: rgb(93, 92, 92);
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pagejs'); ?>
    <script>
        $(document).ready(function() {
            // custom javascript | jquery codes
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/umum/hargakonsumenpublic.blade.php ENDPATH**/ ?>