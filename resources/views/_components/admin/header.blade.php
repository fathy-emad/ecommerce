<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid m-auto mb-3 mt-3">
        <button class="navbar-toggler mb-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand me-lg-5" href="#">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" alt="" height="35">
        </a>


        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-0 list-group-horizontal justify-content-sm-around align-items-center">

                <li class="nav-item me-2 dropdown">
                    <a class="nav-link nav-links-hover position-relative" href="#">
                        <i class="bi bi-envelope-fill"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                            99
                        </span>
                    </a>
                </li>

                <li class="vr h-75 m-auto"></li>

                <li class="nav-item me-2">
                    <a class="nav-link nav-links-hover position-relative" href="#">
                        <i class="bi bi-bell-fill"></i>
                        <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                            99
                        </span>
                    </a>
                </li>

                <li class="vr h-75 m-auto"></li>

                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('changeLocale', ['locale' => $lang == 'en' ? 'ar' : 'en']) }}">
                        <img src="{{ asset("assets/flags/blade-flags/$flag.svg") }}" width="20" height="20"/>
                    </a>
                </li>

                <li class="vr h-75 m-auto"></li>

                <li class="nav-item dropdown me-2">
                    <a class="nav-link nav-links-hover" href="#" role="button" data-bs-active="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="35" alt="" loading="lazy" />
                        <small style="font-size: 15px">{{ auth()->user()->name }}</small>
                    </a>

                    <ul class="dropdown-menu">
                        @auth('admin')
                            <li><a class="dropdown-item nav-links-hover" href="#">
                                    <i class="bi bi-person-lines-fill"></i>&ensp;@lang('common.profile')</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <form method="post" action="{{ route('admin.logout') }}">@csrf
                                    <button type="submit" class="btn btn-block btn-sm btn-primary w-100">
                                        <i class="bi bi-box-arrow-left"></i>&ensp;@lang('common.logout')
                                    </button>
                                </form>
                            </li>
                        @endauth
                        @guest('admin')
                            <li class="dropdown-item">
                                <a class="btn btn-block btn-sm btn-primary w-100" href="{{ route('admin.login') }}">
                                    <i class="bi bi-box-arrow-in-right"></i>&ensp;@lang('common.login')
                                </a>
                            </li>
                        @endguest
                    </ul>
                </li>
            </ul>

            <button class="btn btn-outline-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu">side menu</button>

        </div>
    </div>
</nav>


