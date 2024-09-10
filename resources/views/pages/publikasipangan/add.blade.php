<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
$pageTitle = 'Add New Publikasi Pangan'; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
    <section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
        <?php
        if( $show_header == true ){
    ?>
        <div class="bg-light p-3 mb-3">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto  back-btn-col">
                        <a class="back-btn btn " href="{{ url()->previous() }}">
                            <i class="material-icons">arrow_back</i>
                        </a>
                    </div>
                    <div class="col  ">
                        <div class="">
                            <div class="h5 font-weight-bold text-success">Add New Publikasi Pangan</div>
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
                            <form id="publikasipangan-add-form" role="form" novalidate enctype="multipart/form-data"
                                class="form page-form form-horizontal needs-validation"
                                action="{{ route('publikasipangan.store') }}" method="post">
                                @csrf
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
                                                <label class="control-label" for="gambar">Gambar <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-gambar-holder" class=" ">
                                                    <div class="dropzone required" input="#ctrl-gambar" fieldname="gambar"
                                                        uploadurl="{{ url('fileuploader/upload/gambar') }}"
                                                        data-multiple="false" dropmsg="Choose files or drop files here"
                                                        btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3"
                                                        maximum="1">
                                                        <input name="gambar" id="ctrl-gambar" data-field="gambar"
                                                            required="" class="dropzone-input form-control"
                                                            value="<?php echo get_value('gambar'); ?>" type="text" />
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
                                                        value="<?php echo get_value('tahun', date('Y-m-d', strtotime('+1month'))); ?>" type="datetime" name="tahun"
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
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="author">Author </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-author-holder" class=" ">
                                                    <input id="ctrl-author" data-field="author"
                                                        value="<?php echo get_value('author', 'NULL'); ?>" type="text"
                                                        placeholder="Enter Author" name="author"
                                                        class="form-control " />
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
@endsection
<!-- Page custom css -->
@section('pagecss')
    <style>

    </style>
@endsection
<!-- Page custom js -->
@section('pagejs')
    <script>
        $(document).ready(function() {
            // custom javascript | jquery codes
        });
    </script>
@endsection
