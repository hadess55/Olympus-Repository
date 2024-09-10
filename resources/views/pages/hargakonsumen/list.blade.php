<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
//check if current user role is allowed access to the pages
$can_add = $user->canAccess('hargakonsumen/add');
$can_edit = $user->canAccess('hargakonsumen/edit');
$can_view = $user->canAccess('hargakonsumen/view');
$can_delete = $user->canAccess('hargakonsumen/delete');
$field_name = request()->segment(3);
$field_value = request()->segment(4);
$total_records = $records->total();
$limit = $records->perPage();
$record_count = count($records);
$pageTitle = 'Hargakonsumen'; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
    <section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
        <?php
    if( $show_header == true ){
?>
        <div class="header-image">
            <h1>HARGA KONSUMEN</h1>
            <nav>
                <a href="{{ url('/home') }}">BERANDA</a> > <a href="{{ url('/hargakonsumen') }}">HARGA KONSUMEN</a>
            </nav>
        </div>
        <div class="bg-light p-3 mb-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <form method="get" action="" class="form d-flex align-items-center gap-3">
                            <!-- Filter Kecamatan -->
                            <div class="card mb-2 p-2 flex-grow-1">
                                <div class="fw-bold mb-1">Filter Kecamatan</div>
                                <select name="id_kecamatan" class="form-select">
                                    <option value="">--pilih kecamatan--</option>
                                    <?php 
                                $options = $id_kecamatan_option_list ?? [];
                                foreach($options as $option){
                                    $value = $option->value;
                                    $label = $option->label ?? $value;
                                    $selected = Html::get_field_selected('id_kecamatan', $value);
                                ?>
                                    <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                        <?php echo $label; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <!-- Filter Tanggal -->
                            <div class="card mb-2 p-2 flex-grow-1">
                                <div class="fw-bold mb-1">Filter Tanggal</div>
                                <input class="form-control datepicker" value="<?php echo get_value('tanggal'); ?>" type="datetime"
                                    name="tanggal" placeholder="Pilih Tanggal" data-enable-time="" data-date-format="Y-m-d"
                                    data-alt-format="M j, Y" data-inline="false" data-no-calendar="false"
                                    data-mode="range" />
                            </div>

                            <!-- Tombol Filter -->
                            <button class="btn btn-success mb-2">Filter</button>
                        </form>
                    </div>

                    <!-- Tombol Add New -->
                    <div class="col-auto">
                        <?php if($can_add){ ?>
                        <a class="btn btn-success mb-2" href="<?php print_link('hargakonsumen/add', true); ?>">
                            <i class="material-icons">add</i> Tambah Data
                        </a>
                        <?php } ?>
                    </div>

                    <!-- Form Search -->
                    <div class="col-md-3">
                        <form class="search d-flex" action="{{ url()->current() }}" method="get">
                            <input type="hidden" name="page" value="1" />
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"
                                placeholder="Search" />
                            <button class="btn btn-success ms-1"><i class="material-icons">search</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
}
?>

        <div class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col comp-grid ">
                        <div class=" page-content">
                            <div id="hargakonsumen-harga_konsumen_saya-records">
                                <div id="page-main-content" class="table-responsive">
                                    <?php Html::page_bread_crumb('/hargakonsumen/harga_konsumen_saya', $field_name, $field_value); ?>
                                    <?php Html::display_page_errors($errors); ?>
                                    <div class="filter-tags mb-2">
                                        <?php Html::filter_tag('search', __('Search')); ?>
                                        <!-- Page filter list goes here -->
                                    </div>
                                    <?php if($total_records){ ?>
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
                                                    <th class="text-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($records as $data) { 
                                                    $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                                ?>
                                                <tr>
                                                    <td>{{ $data->kecamatan->nama }}</td>
                                                    <td><?php echo date('d-m-Y', strtotime($data['tanggal'])); ?></td>
                                                    <td><?php echo to_currency($data['gkp_petani'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['gkg_penggilingan'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['beras_premium'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['beras_medium'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['jagung_pipilan_kering'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['ubi_kayu'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['ubi_jalar'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['kedelai_lokal_kering'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['cabe_besar'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['cabe_rawit_merah'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['cabe_keriting'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['bawang_merah'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['daging_ayam'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['daging_sapi'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['telur_ayam_ras'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['pisang'], 'en-ID'); ?></td>
                                                    <td><?php echo to_currency($data['jeruk'], 'en-ID'); ?></td>
                                                    <td class="text-end">
                                                        <div class="d-flex justify-content-end">
                                                            <?php if($can_view) { ?>
                                                            <a class="btn btn-sm btn-primary has-tooltip me-1"
                                                                href="<?php print_link("hargakonsumen/view/$rec_id"); ?>">
                                                                <i class="material-icons">visibility</i> View
                                                            </a>
                                                            <?php } ?>
                                                            <?php if($can_edit) { ?>
                                                            <a class="btn btn-sm btn-success has-tooltip me-1"
                                                                href="<?php print_link("hargakonsumen/edit/$rec_id"); ?>">
                                                                <i class="material-icons">edit</i> Edit
                                                            </a>
                                                            <?php } ?>
                                                            <?php if($can_delete) { ?>
                                                            <a class="btn btn-sm btn-danger has-tooltip record-delete-btn"
                                                                data-prompt-msg="Are you sure you want to delete this record?"
                                                                data-display-style="modal" href="<?php print_link("hargaprodusen/delete/$rec_id"); ?>">
                                                                <i class="material-icons">delete_sweep</i> Delete
                                                            </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <?php } else { ?>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="bg-light text-center text-muted animated bounce p-3"
                                                    colspan="1000">
                                                    <i class="material-icons">block</i> Data Tidak Ditemukan
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php } ?>
                                    <?php if($show_footer){ ?>
                                    <div class="mt-3">
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-md-auto d-flex">
                                                <?php if($can_delete){ ?>
                                                <button data-prompt-msg="Are you sure you want to delete these records?"
                                                    data-display-style="modal" data-url="<?php print_link('hargaprodusen/delete/{sel_ids}'); ?>"
                                                    class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                    <i class="material-icons">delete_sweep</i> Delete Selected
                                                </button>
                                                <?php } ?>
                                            </div>
                                            <div class="col">
                                                <?php
                                                if ($show_pagination == true) {
                                                    $pager = new Pagination($total_records, $record_count);
                                                    $pager->show_page_count = false;
                                                    $pager->show_record_count = true;
                                                    $pager->show_page_limit = false;
                                                    $pager->limit = $limit;
                                                    $pager->show_page_number_list = true;
                                                    $pager->pager_link_range = 5;
                                                    $pager->render();
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
<!-- Page custom css -->
@section('pagecss')
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
    </style>
@endsection
<!-- Page custom js -->
@section('pagejs')
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
@endsection
