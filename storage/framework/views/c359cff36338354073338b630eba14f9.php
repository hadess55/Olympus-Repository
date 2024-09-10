<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
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
        <div id="topbar" class="navbar navbar-expand-md navbar-dark bg-dark p-3"
            style="background-color: #11421d !important">
            <a class="navbar-brand" href="/home">
                <img class="img-responsive" src="<?php echo e(asset('images/logo.png')); ?>" style="height: 50px; width: auto;" />
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
                        </ul>
                    </li>
                </ul>
                <a href="<?php echo e(url('index/login')); ?>" class="btn btn-login ms-3 ml-3"><i
                        class="bi bi-box-arrow-in-right ml-3"></i>Login</a>
            </div>
        </div>
    </div>
    <div>
        <div class="container-fluid">
            <div class="row bg-light-green text-center py-1">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo e(asset('images/bg/1.png')); ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo e(asset('images/bg/2.png')); ?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo e(asset('images/bg/3.png')); ?>" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>


            <!-- Harga Konsumen & Produsen Section -->
            <div class="row bg-success text-white text-center py-5">
                <div class="col-md-12">
                    <div class="card bg-white text-dark p-4">
                        <h3>Grafik Harga Produsen</h3>
                        <?php echo $chart->container(); ?>

                        <a href="<?php echo e(url('hargaprodusen-public')); ?>" class="btn btn-success">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!--Kata Sambutan-->
            <div class="row bg-light text-center py-5">
                <h2 class="mb-5">Kata Sambutan</h2>
                <p>Sejalan dengan upaya untuk mewujudkan Visi dan Misi Kabupaten Blitar,
                    Dinas Pertanian dan Pangan Kabupaten Blitar mereposisi untuk merespon tuntutan yang berkembang di bidang
                    teknologi Informasi dan keterbukaan informasi publik. Sistem informasi Pangan Kabupaten Blitar adalah
                    sebuah sistem informasi yang menyajikan informasi pangan yang penting dan akurat yang ada di Kabupaten
                    Blitar. Sistem informasi pangan ini berbasis web , sehingga setiap orang dapat mengakses kapanpun
                    dimanapun</p>

            </div>
            <!-- Menu Utama Section -->
            <div class="row bg-light text-center py-5">
                <h2>Menu Aplikasi</h2>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/sayur.jpg')); ?>" class="card-img-top" alt="Menu 1">
                        <div class="card-body">
                            <h5 class="card-title">Data Pangan</h5>
                            <a href="data-pangan-public" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/panen padi.jpg')); ?>" class="card-img-top" alt="Menu 2">
                        <div class="card-body">
                            <h5 class="card-title">Data Harga Produsen</h5>
                            <a href="<?php echo e(url('hargaprodusen-public')); ?>" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/sayuran.jpg')); ?>" class="card-img-top" alt="Menu 3">
                        <div class="card-body">
                            <h5 class="card-title">Neraca Bahan Makanan</h5>
                            <a href="<?php echo e(url('nbmpublic')); ?>" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            



            <!-- Publikasi Pangan -->
            <section class="publikasi-pangan">
                <h2>Publikasi Pangan</h2>
                <div class="publikasi-wrapper">
                    <?php $__currentLoopData = $publikasiPangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="publikasi-card">
                            <img src="<?php echo e($post['gambar'] ?? 'path/to/default-image.jpg'); ?>" alt="<?php echo e($post['judul']); ?>">
                            <div class="publikasi-card-body">
                                <div class="publikasi-card-deskripsi">
                                    <h5 class="publikasi-card-title"><?php echo e($post['judul']); ?></h5>
                                    <p class="publikasi-card-text"><?php echo e($post['tahun']); ?></p>
                                    <p class="publikasi-card-text"><?php echo e($post->kecamatan->nama); ?></p>
                                    <p class="publikasi-card-text">By : <?php echo e($post->author ?? '-Data Kosong-'); ?></p>
                                </div>
                            </div>
                            <div class="publikasi-card-footer">
                                <a href="<?php echo e($post['gambar']); ?>" class="btn btn-success" target="_blank">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="all-news-button">
                    <a href="<?php echo e(url('publikasi-pangan-public')); ?>" class="btn btn-success btn-lg" role="button">Berita
                        Terbaru</a>
                </div>
            </section>


            <!-- Footer -->
            <footer>
                <div class="footer-container">
                    <div class="footer-about" style="margin-right: 50px">
                        <h3>Tentang Aplikasi</h3>
                        <p>Sistem Informasi Pangan Kabupaten Blitar adalah sebuah sistem informasi yang menyajikan informasi
                            pangan yang penting dan akurat yang ada di Kabupaten Blitar.</p>
                    </div>
                    <div class="footer-service">
                        <h3>Service</h3>
                        <ul>
                            <li>Harga Konsumen</li>
                            <li>Harga Produsen</li>
                            <li>Ketersediaan Pangan</li>
                            <li>Dokumen SKPG</li>
                            <li>Dokumen NBM</li>
                            <li>Data Grafik</li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <h3>Kontak Kami</h3>
                        <p>Jl. Yani No. 25 Blitar</p>
                        <p>Tel: (0342) 801592</p>
                        <p>Fax: (0342) 801592</p>
                        <p>Email: dispertablitar@blitarkab.go.id</p>
                    </div>
                    <div class="footer-img">
                        <img src="<?php echo e(asset('images/logo_kab.png')); ?>">
                    </div>
                    <div class="footer-info">
                        <p>Sistem Informasi Pangan Kabupaten Blitar adalah sebuah sistem informasi yang menyajikan informasi
                            pangan yang penting dan akurat yang ada di Kabupaten Blitar.</p>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 Bidang Ketahanan DISPERTAPA KAB. BLITAR</p>
                </div>
            </footer>
            <!-- Footer Section -->
            <div class="row bg-dark text-white text-center py-4">
                <p>© 2024 Sistem Informasi Pangan Kabupaten Blitar</p>
                <p>Jl. A.Yani No.25 Blitar | Telp: (0342) 801592 | Email: dispertablitar@blitarkab.go.id</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<!-- Page custom css -->
<?php $__env->startSection('pagecss'); ?>
    <style>
        .menu-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            /* Ini penting untuk menyembunyikan elemen di luar batas */
            margin: 20px 0;
        }

        .menu-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .menu-item {
            min-width: 33.33%;
            /* Tiga item akan terlihat pada layar */
            box-sizing: border-box;
            padding: 0 10px;
        }

        .card {
            height: 100%;
        }

        .btn-login {
            margin-right: 5px;
            background-color: white;
            color: black;
            border-radius: 20px;
            padding: 5px 28px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-login:hover {
            background-color: white;
            color: white;
            text-decoration: none;
            opacity: 2;
        }

        .bg-light-green {
            background-color: #9ee37d;
        }

        .card-body {
            background-color: #f8f9fa;
        }

        /* Publikasi Pangan */
        .publikasi-pangan {
            padding: 50px 0;
            text-align: center;
            background-color: #f7f7f7;
        }

        .publikasi-pangan h2 {
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .publikasi-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .publikasi-item {
            background-color: white;
            padding: 20px;
            width: 30%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .publikasi-item h3 {
            margin-top: 10px;
            font-size: 1.5rem;
            color: #333;
        }

        /* Footer */
        footer {
            background-color: #006400;
            color: white;
            padding: 50px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 0 50px;
        }

        .footer-about,
        .footer-service,
        .footer-contact,
        .footer-info {
            width: 30%;
        }

        .footer-img img {
            width: 200px;
            height: auto;
            display: flex;
            margin-right: 50px
        }


        .footer-about p,
        .footer-contact p,
        .footer-info p,
        .footer-service ul {
            margin-top: 10px;
            color: white;
        }

        .footer-service ul {
            list-style-type: none;
            padding: 0;
        }



        .footer-service ul li {
            margin-bottom: 8px;
        }

        .footer-bottom {
            margin-top: 20px;
            text-align: center;
            padding: 20px 0;
            background-color: #004d00;
        }
    </style>
<?php $__env->stopSection(); ?>
<!-- Page custom js -->
<?php $__env->startSection('pagejs'); ?>
    <script>
        $(document).ready(function() {});
    </script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php echo $chart->script(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('.menu-wrapper');
            let startX = 0;
            let currentIndex = 0;
            const threshold = 50;
            const totalItems = wrapper.children.length;
            const visibleItems = 3;
            let isSwiping = false;

            wrapper.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                isSwiping = true;
            });

            wrapper.addEventListener('touchmove', (e) => {
                if (!isSwiping) return;

                let moveX = e.touches[0].clientX;
                let diffX = startX - moveX;

                if (diffX > threshold) {
                    if (currentIndex < totalItems - visibleItems) {
                        currentIndex++;
                        wrapper.style.transform = `translateX(-${currentIndex * (100 / visibleItems)}%)`;
                    }
                    isSwiping = false;
                } else if (diffX < -threshold) {
                    if (currentIndex > 0) {
                        currentIndex--;
                        wrapper.style.transform = `translateX(-${currentIndex * (100 / visibleItems)}%)`;
                    }
                    isSwiping = false;
                }
            });

            wrapper.addEventListener('touchend', () => {
                isSwiping = false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/home/user.blade.php ENDPATH**/ ?>