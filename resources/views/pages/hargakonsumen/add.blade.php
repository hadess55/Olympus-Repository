<!--
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
$pageTitle = 'Tambah Harga Konsumen'; //set dynamic page title
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
                            <div class="h5 font-weight-bold text-success">Tambah Harga Konsumen</div>
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
                            <form id="hargakonsumen-add-form" role="form" novalidate enctype="multipart/form-data"
                                class="form page-form form-horizontal needs-validation"
                                action="{{ route('hargakonsumen.store') }}" method="post">
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="tanggal">Tanggal <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-tanggal-holder" class="input-group ">
                                                    <input id="ctrl-tanggal" data-field="tanggal"
                                                        class="form-control datepicker  datepicker" required=""
                                                        value="<?php echo get_value('tanggal'); ?>" type="datetime" name="tanggal"
                                                        placeholder="Tanggal" data-enable-time="false" data-min-date=""
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
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-id_kecamatan-holder" class=" ">
                                                    <select required="" id="ctrl-id_kecamatan" data-field="id_kecamatan"
                                                        name="id_kecamatan" placeholder="Select a value ..."
                                                        class="form-select">
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
                                                <label class="control-label" for="gkp_petani">Gkp Petani <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-gkp_petani-holder" class=" ">
                                                    <input id="ctrl-gkp_petani" data-field="gkp_petani"
                                                        value="<?php echo get_value('gkp_petani'); ?>" type="number" placeholder="Gkp Petani"
                                                        step="any" required="" name="gkp_petani"
                                                        class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="gkg_penggilingan">Gkg Penggilingan <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-gkg_penggilingan-holder" class=" ">
                                                    <input id="ctrl-gkg_penggilingan" data-field="gkg_penggilingan"
                                                        value="<?php echo get_value('gkg_penggilingan'); ?>" type="number"
                                                        placeholder="Gkg Penggilingan" step="any" required=""
                                                        name="gkg_penggilingan" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="beras_premium">Beras Premium <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-beras_premium-holder" class=" ">
                                                    <input id="ctrl-beras_premium" data-field="beras_premium"
                                                        value="<?php echo get_value('beras_premium'); ?>" type="number"
                                                        placeholder="Beras Premium" step="any" required=""
                                                        name="beras_premium" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="beras_medium">Beras Medium <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-beras_medium-holder" class=" ">
                                                    <input id="ctrl-beras_medium" data-field="beras_medium"
                                                        value="<?php echo get_value('beras_medium'); ?>" type="number"
                                                        placeholder="Beras Medium" step="any" required=""
                                                        name="beras_medium" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="jagung_pipilan_kering">Jagung Pipilan
                                                    Kering <span class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-jagung_pipilan_kering-holder" class=" ">
                                                    <input id="ctrl-jagung_pipilan_kering"
                                                        data-field="jagung_pipilan_kering" value="<?php echo get_value('jagung_pipilan_kering'); ?>"
                                                        type="number" placeholder="Jagung Pipilan Kering" step="any"
                                                        required="" name="jagung_pipilan_kering"
                                                        class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="cabe_besar">Cabe Besar <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-cabe_besar-holder" class=" ">
                                                    <input id="ctrl-cabe_besar" data-field="cabe_besar"
                                                        value="<?php echo get_value('cabe_besar'); ?>" type="number"
                                                        placeholder="Cabe Besar" step="any" required=""
                                                        name="cabe_besar" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="cabe_rawit_merah">Cabe Rawit Merah <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-cabe_rawit_merah-holder" class=" ">
                                                    <input id="ctrl-cabe_rawit_merah" data-field="cabe_rawit_merah"
                                                        value="<?php echo get_value('cabe_rawit_merah'); ?>" type="number"
                                                        placeholder="Cabe Rawit Merah" step="any" required=""
                                                        name="cabe_rawit_merah" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="cabe_keriting">Cabe Keriting <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-cabe_keriting-holder" class=" ">
                                                    <input id="ctrl-cabe_keriting" data-field="cabe_keriting"
                                                        value="<?php echo get_value('cabe_keriting'); ?>" type="number"
                                                        placeholder="Cabe Keriting" step="any" required=""
                                                        name="cabe_keriting" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="bawang_merah">Bawang Merah <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-bawang_merah-holder" class=" ">
                                                    <input id="ctrl-bawang_merah" data-field="bawang_merah"
                                                        value="<?php echo get_value('bawang_merah'); ?>" type="number"
                                                        placeholder="Bawang Merah" step="any" required=""
                                                        name="bawang_merah" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="daging_ayam">Daging Ayam <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-daging_ayam-holder" class=" ">
                                                    <input id="ctrl-daging_ayam" data-field="daging_ayam"
                                                        value="<?php echo get_value('daging_ayam'); ?>" type="number"
                                                        placeholder="Daging Ayam" step="any" required=""
                                                        name="daging_ayam" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="daging_sapi">Daging Sapi <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-daging_sapi-holder" class=" ">
                                                    <input id="ctrl-daging_sapi" data-field="daging_sapi"
                                                        value="<?php echo get_value('daging_sapi'); ?>" type="number"
                                                        placeholder="Daging Sapi" step="any" required=""
                                                        name="daging_sapi" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="telur_ayam_ras">Telur Ayam Ras <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-telur_ayam_ras-holder" class=" ">
                                                    <input id="ctrl-telur_ayam_ras" data-field="telur_ayam_ras"
                                                        value="<?php echo get_value('telur_ayam_ras'); ?>" type="number"
                                                        placeholder="Telur Ayam Ras" step="any" required=""
                                                        name="telur_ayam_ras" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="pisang">Pisang <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-pisang-holder" class=" ">
                                                    <input id="ctrl-pisang" data-field="pisang"
                                                        value="<?php echo get_value('pisang'); ?>" type="number" placeholder="Pisang"
                                                        step="any" required="" name="pisang"
                                                        class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="jeruk">Jeruk <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-jeruk-holder" class=" ">
                                                    <input id="ctrl-jeruk" data-field="jeruk"
                                                        value="<?php echo get_value('jeruk'); ?>" type="number" placeholder="Jeruk"
                                                        step="any" required="" name="jeruk"
                                                        class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ubi_kayu">Ubi Kayu <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-ubi_kayu-holder" class=" ">
                                                    <input id="ctrl-ubi_kayu" data-field="ubi_kayu"
                                                        value="<?php echo get_value('ubi_kayu'); ?>" type="number"
                                                        placeholder="Ubi Kayu" step="any" required=""
                                                        name="ubi_kayu" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="ubi_jalar">Ubi Jalar <span
                                                        class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-ubi_jalar-holder" class=" ">
                                                    <input id="ctrl-ubi_jalar" data-field="ubi_jalar"
                                                        value="<?php echo get_value('ubi_jalar'); ?>" type="number"
                                                        placeholder="Ubi Jalar" step="any" required=""
                                                        name="ubi_jalar" class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="kedelai_lokal_kering">Kedelai Lokal
                                                    Kering <span class="text-danger"></span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-kedelai_lokal_kering-holder" class=" ">
                                                    <input id="ctrl-kedelai_lokal_kering"
                                                        data-field="kedelai_lokal_kering" value="<?php echo get_value('kedelai_lokal_kering'); ?>"
                                                        type="number" placeholder="Kedelai Lokal Kering" step="any"
                                                        required="" name="kedelai_lokal_kering"
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
