<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
<?php $comp_model = app('App\Models\ComponentsData'); ?>
<?php
$tahun_option_list = $comp_model->tahun_option_list();
$pageTitle = 'Admin';
?>

<?php $__env->startSection('title', $pageTitle); ?>
<?php $__env->startSection('content'); ?>
    <div>
        <!-- Main Content Section -->
        <div class="container-fluid">
            <!-- Banner Section -->
            
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
                <p></p>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/sayur.jpg')); ?>" class="card-img-top" alt="Menu 1">
                        <div class="card-body">
                            <h5 class="card-title">Data Pangan</h5>
                            <a href="<?php echo e(url('datapangan')); ?>" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/panen padi.jpg')); ?>" class="card-img-top" alt="Menu 2">
                        <div class="card-body">
                            <h5 class="card-title">Data Harga Produsen</h5>
                            <a href="<?php echo e(url('hargaprodusen')); ?>" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo e(asset('images/sayuran.jpg')); ?>" class="card-img-top" alt="Menu 3">
                        <div class="card-body">
                            <h5 class="card-title">Neraca Bahan Makanan</h5>
                            <a href="<?php echo e(url('nbm')); ?>" class="btn btn-success">Lihat Detail</a>
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
        .bg-light-green {
            background-color: #9ee37d;
        }

        .card-body {
            background-color: #f8f9fa;
        }

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

        .all-news-button {
            margin-top: 30px;
        }

        .all-news-button a {
            background-color: #6dba4d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .all-news-button a:hover {
            background-color: #5aa33b;
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
        $(document).ready(function() {
            // Add 'row' class to each 'card' within the form with class 'form'
            $('.form').addClass('row');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <?php echo $chart->script(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sip\resources\views/pages/home/index.blade.php ENDPATH**/ ?>