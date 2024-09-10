@if (Auth::check())
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
        <div id="topbar" class="navbar navbar-expand-md navbar-dark bg-dark"
            style="background-color: #11421d !important">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <img class="img-responsive" src="{{ asset('images/logo.png') }} "
                        style="height: 75px; width: auto;" />
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target=".navbar-responsive-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <div class="me-auto"></div>
                    {{ Html::render_menu(Menu::navbartopright(), 'navbar-nav') }}
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <?php
                            $user_photo = $user->UserPhoto();
                            if($user_photo){
                            Html::img($user_photo, 30, 30);
                            }
                            else{
                        ?>
                                <span class="avatar-icon"><i class="material-icons">account_box</i></span>
                                <?php
                            }
                        ?>
                                <span><?php echo $user->UserName(); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php print_link('account'); ?>"><i
                                        class="material-icons">account_box</i> Akun Saya</a>
                                <a class="dropdown-item" href="<?php print_link('auth/logout'); ?>"><i
                                        class="material-icons">exit_to_app</i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@else
    {{-- <div id="topbar" class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">
                <img class="img-responsive" src="{{ asset('images/logo.png') }}" />
            </a>
        </div>
    </div> --}}
@endif
