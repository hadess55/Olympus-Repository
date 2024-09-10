<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
//check if current user role is allowed access to the pages
$can_add = $user->canAccess('nbm/add');
$can_edit = $user->canAccess('nbm/edit');
$can_view = $user->canAccess('nbm/view');
$can_delete = $user->canAccess('nbm/delete');
$field_name = request()->segment(3);
$field_value = request()->segment(4);
$total_records = $records->total();
$limit = $records->perPage();
$record_count = count($records);
$pageTitle = 'Nbm'; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
    <section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
        <?php
        if( $show_header == true ){
    ?>
        <div class="header-image">
            <h1>NBM</h1>
            <nav>
                <a href="{{ url('/home') }}">BERANDA</a> > <a href="{{ url('/nbm') }}">NBM</a>
            </nav>
        </div>
        <div class="bg-light mb-3">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col  ">
                        <div class="">
                            {{-- <div class="h5 font-weight-bold text-primary">Nbm</div> --}}
                        </div>
                    </div>
                    <div class="col-auto  ">
                        <?php if($can_add){ ?>
                        <a class="btn btn-success btn-block" href="<?php print_link('nbm/add', true); ?>">
                            <i class="material-icons">add</i>
                            Tambah Data Nbm
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-md-3  ">
                        <!-- Page drop down search component -->
                        <form class="search" action="{{ url()->current() }}" method="get">
                            <input type="hidden" name="page" value="1" />
                            <div class="input-group">
                                <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text"
                                    name="search" placeholder="Search" />
                                <button class="btn btn-success"><i class="material-icons">search</i></button>
                            </div>
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
                            <div id="nbm-list-records">
                                <div id="page-main-content" class="table-responsive">
                                    <?php Html::page_bread_crumb('/nbm/', $field_name, $field_value); ?>
                                    <?php Html::display_page_errors($errors); ?>
                                    <div class="filter-tags mb-2">
                                        <?php Html::filter_tag('search', __('Search')); ?>
                                    </div>
                                    <table class="table table-hover table-striped table-sm text-left">
                                        <thead class="table-header ">
                                            <tr>
                                                <?php if($can_delete){ ?>
                                                <th class="td-checkbox">
                                                    <label class="form-check-label">
                                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                                    </label>
                                                </th>
                                                <?php } ?>
                                                <th class="td-id"> Id</th>
                                                <th class="td-judul"> Judul</th>
                                                <th class="td-file"> File</th>
                                                <th class="td-tahun"> Tahun</th>
                                                {{-- <th class="td-id_kecamatan"> Id Kecamatan</th>
                                                <th class="td-id"> Kecamatan Id</th> --}}
                                                <th class="td-nama"> Kecamatan</th>
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                    if($total_records){
                                ?>
                                        <tbody class="page-data">
                                            <!--record-->
                                            <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                        $counter++;
                                    ?>
                                            <tr>
                                                <?php if($can_delete){ ?>
                                                <td class=" td-checkbox">
                                                    <label class="form-check-label">
                                                        <input class="optioncheck form-check-input" name="optioncheck[]"
                                                            value="<?php echo $data['id']; ?>" type="checkbox" />
                                                    </label>
                                                </td>
                                                <?php } ?>
                                                <!--PageComponentStart-->
                                                <td class="td-id">
                                                    <a href="<?php print_link("/nbm/view/$data[id]"); ?>"><?php echo $data['id']; ?></a>
                                                </td>
                                                <td class="td-judul">
                                                    <?php echo $data['judul']; ?>
                                                </td>
                                                <td class="td-file">
                                                    {{-- <?php
                                                    Html::page_img($data['file'], '50px', '50px', 'small', 1);
                                                    ?> --}}
                                                    @if ($data->file)
                                                        <a href="{{ asset($data->file) }}" target="_blank">Download</a>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="td-tahun">
                                                    <?php echo $data['tahun']; ?>
                                                </td>
                                                {{-- <td class="td-id_kecamatan">
                                                    <?php echo $data['id_kecamatan']; ?>
                                                </td>
                                                <td class="td-kecamatan_id">
                                                    <?php echo $data['kecamatan_id']; ?>
                                                </td> --}}
                                                <td class="td-kecamatan_nama">
                                                    <?php echo $data['kecamatan_nama']; ?>
                                                </td>
                                                <!--PageComponentEnd-->
                                                <td class="td-btn">
                                                    <?php if($can_view){ ?>
                                                    <a class="btn btn-sm btn-primary has-tooltip "
                                                        href="<?php print_link("nbm/view/$rec_id"); ?>">
                                                        <i class="material-icons">visibility</i> View
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_edit){ ?>
                                                    <a class="btn btn-sm btn-success has-tooltip "
                                                        href="<?php print_link("nbm/edit/$rec_id"); ?>">
                                                        <i class="material-icons">edit</i> Edit
                                                    </a>
                                                    <?php } ?>
                                                    <?php if($can_delete){ ?>
                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn"
                                                        data-prompt-msg="Are you sure you want to delete this record?"
                                                        data-display-style="modal" href="<?php print_link("nbm/delete/$rec_id"); ?>">
                                                        <i class="material-icons">delete_sweep</i> Delete
                                                    </a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php 
                            }
                        ?>
                                            <!--endrecord-->
                                        </tbody>
                                        <tbody class="search-data"></tbody>
                                        <?php
                        }
                        else{
                    ?>
                                        <tbody class="page-data">
                                            <tr>
                                                <td class="bg-light text-center text-muted animated bounce p-3"
                                                    colspan="1000">
                                                    <i class="material-icons">block</i> No record found
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                        }
                    ?>
                                    </table>
                                </div>
                                <?php
                if($show_footer){
            ?>
                                <div class=" mt-3">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-md-auto d-flex">
                                            <?php if($can_delete){ ?>
                                            <button data-prompt-msg="Are you sure you want to delete these records?"
                                                data-display-style="modal" data-url="<?php print_link('nbm/delete/{sel_ids}'); ?>"
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
                                <?php
                }
            ?>
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
