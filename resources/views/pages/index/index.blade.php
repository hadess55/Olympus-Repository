        <!--
        expose component model to current view
        e.g $arrDataFromDb = $comp_model->fetchData(); //function name
        -->
        @inject('comp_model', 'App\Models\ComponentsData')
        <?php
        $pageTitle = 'SIP'; // set page title
        ?>
        @extends($layout)
        @section('title', $pageTitle)
        @section('content')
            {{-- <div>
                <div class="mb-3">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col col-sm-6 col-md-3 col-lg-3 comp-grid ">
                                <div class=" card-7 mt-5 bg-light">
                                    <div class="h4 fw-bold text-primary text-center">
                                        <img src="{{ asset('images/logo.png') }}" width="50px" height="50px"
                                            class="img-fluid rounded-circle" />
                                        Login
                                    </div>
                                </div>
                                <div class="card card-7 page-content">

                                    <div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger animated bounce">{{ $errors->first() }}</div>
                                        @endif
                                        <form name="loginForm" action="{{ route('auth.login') }}"
                                            class="needs-validation form page-form" method="post">
                                            @csrf
                                            <div class="input-group form-group">
                                                <input placeholder="Username Or Email" name="username" required="required"
                                                    class="form-control" type="text" />
                                                <span class="input-group-text"><i
                                                        class="form-control-feedback material-icons">account_circle</i></span>
                                            </div>
                                            <div class="input-group form-group">

                                                <input placeholder="Password" required="required" name="password"
                                                    class="form-control " type="password" />
                                                <span class="input-group-text"><i
                                                        class="form-control-feedback material-icons">lock</i></span>
                                            </div>
                                            <div class="row clearfix mt-3 mb-3">
                                                <div class="col-6">
                                                    <label class="">
                                                        <input value="true" type="checkbox" name="rememberme" />
                                                        Ingat saya
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{ route('password.forgotpassword') }}" class="text-danger">
                                                        Reset Password?</a>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button class="btn btn-primary btn-block btn-md" type="submit">
                                                    <i class="load-indicator">
                                                        <clip-loader :loading="loading" color="#fff"
                                                            size="20px"></clip-loader>
                                                    </i>
                                                    Login <i class="material-icons">lock_open</i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class=" card-7">
                                    <div class="text-center">
                                        Don't Have an Account? <a href="{{ route('auth.register') }}"
                                            class="btn btn-success">Register
                                            <i class="material-icons">account_box</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- background-color: hsl(230, 76%, 54%) --}}
            <!-- Section: Design Block -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start bg-login">
                <div class="container" style="display: flex; justify-content: center; align-items: center;">
                    <div class="card" style="">
                        <div class="p-4">
                            <div class="row gx-lg-5 align-items-center">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <img src="{{ asset('images/SIP.png') }}" class="img-fluid max-width: 30%">
                                </div>

                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <div class="card">
                                        <div class="card-body py-5 px-md-5">
                                            @if ($errors->any())
                                                <div class="alert alert-danger animated bounce">{{ $errors->first() }}</div>
                                            @endif
                                            <form name="loginForm" action="{{ route('auth.login') }}"
                                                class="needs-validation form page-form" method="post">
                                                @csrf
                                                <!-- Email input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <label class="form-label mb-2" for="form3Example3">Username</label>
                                                    <input placeholder="Username" type="text" id="username"
                                                        class="form-control" name="username" required="required"
                                                        type="text" />
                                                </div>

                                                <!-- Password input -->
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <label class="form-label mb-2" for="form3Example4">Password</label>
                                                    <input type="password" id="password" class="form-control"
                                                        placeholder="Password" type="password" name="password"
                                                        required="required" />

                                                </div>

                                                <!-- Checkbox -->
                                                <div class="form-check d-flex justify-content-left mb-4">
                                                    <input class="form-check-input me-2" type="checkbox" value="true"
                                                        id="form2Example33" checked name="rememberme" />
                                                    <label class="form-check-label" for="form2Example33">
                                                        Ingat saya
                                                    </label>
                                                </div>

                                                <!-- Submit button -->
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-dark w-100 mb-4">
                                                    Masuk
                                                </button>

                                                <!-- Register & Lupa Password -->
                                                <div style="display: flex; justify-content: space-between;">
                                                    <a href="{{ route('password.forgotpassword') }}" class="text-danger">
                                                        <p style="margin: 0;">Lupa Password?</p>
                                                    </a>
                                                    <a href="{{ route('auth.register') }}" class="text-warning">
                                                        <p style="margin: 0;">Daftar</p>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
        <!-- Page custom css -->
        @section('pagecss')
            <style>
                .bg-login {
                    background-image: url('/images/bg/b2.png');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    width: 100%;
                    height: 100vh;
                }

                .card {
                    background: rgba(255, 255, 255, 0.16);
                    backdrop-filter: blur(10px);
                    /* width: 50rem; */
                    alig
                }
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
