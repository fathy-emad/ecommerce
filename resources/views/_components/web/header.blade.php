<div class="w-100 bg-primary bg-gradient bg-opacity-75  d-none d-md-block">
    <div class="container row m-auto text-light text-center p-3">
        <div class="col-md-3"><i class="bi bi-telephone-fill"></i><span> +2 01141661776</span></div>
        <div class="col-md-3"><i class="bi bi-whatsapp"></i><span> +2 01141661776</span></div>
        <div class="col-md-3"><i class="bi bi-envelope-at-fill"></i><span>fatyemad@gmail.com</span></div>
        <div class="col-md-3">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-tiktok"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-youtube"></i>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container m-auto mb-3 mt-3">
        <button class="navbar-toggler mb-3 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand me-lg-5" href="#">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" alt="" height="35">
        </a>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <div class="w-100 margin-bottom">

                <form class="d-lg-inline-block form-inline m-auto ml-md-3 my-2 my-md-0 m-100 navbar-search">
                    <div class="input-group">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">@lang('common.allCategories')</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-links-hover" href="#">Action</a></li>
                            <li><a class="dropdown-item nav-links-hover" href="#">Another action</a></li>
                            <li><a class="dropdown-item nav-links-hover" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item nav-links-hover" href="#">Separated link</a></li>
                        </ul>
                        <input type="search" class="form-control border-0 small" aria-label="Text input with dropdown button">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div>
                <ul class="navbar-nav mb-0 list-group-horizontal justify-content-sm-around">

                    <li class="nav-item me-2 dropdown">
                        <a class="nav-link nav-links-hover position-relative" href="#">
                            <i class="bi bi-cart-fill"></i>
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
                        <a class="nav-link nav-links-hover position-relative" href="#">
                            <i class="bi bi-heart-fill"></i>
                            <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                99
                            </span>
                        </a>
                    </li>

                    <li class="vr h-75 m-auto"></li>

                    <li class="nav-item me-2">
                        <a class="nav-link"
                           @php
                            $lang =  app()->getLocale() == 'ar' ? 'en' : 'ar';
                            $flag = $lang == 'en' ? 'language-en' : 'country-eg';
                           @endphp
                           href="{{ route('changeLocale', ['locale' => $lang]) }}">
                            <img src="{{ asset("assets/flags/blade-flags/$flag.svg") }}" width="25" height="25"/>
                        </a>
                    </li>

                    <li class="vr h-75 m-auto"></li>

                    <li class="nav-item dropdown me-2">
                        <a class="nav-link nav-links-hover" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="35"
                                 alt="" loading="lazy" />
                        </a>

                        <ul class="dropdown-menu">
                            @auth('web')
                                <li><a class="dropdown-item nav-links-hover" href="#">
                                        <i class="bi bi-person-lines-fill"></i>&ensp;@lang('common.profile')</a></li>
                                <li><a class="dropdown-item nav-links-hover" href="#"><i class="bi bi-basket-fill"></i>
                                        &ensp;@lang('common.orders')</a></li>
                                <li><a class="dropdown-item nav-links-hover" href="#">
                                        <i class="bi bi-suit-heart-fill"></i>&ensp;@lang('common.saved')</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-item">
                                    <form method="post" action="{{ route('web.logout') }}">@csrf
                                        <button type="submit" class="btn btn-block btn-sm btn-primary w-100">
                                            <i class="bi bi-box-arrow-left"></i>&ensp;@lang('common.logout')</button>
                                    </form>
                                </li>
                            @endauth
                            @guest('web')
                                <li class="dropdown-item"><a class="btn btn-block btn-sm btn-primary w-100"
                                     href="{{ route('web.login') }}"><i class="bi bi-box-arrow-in-right"></i>&ensp;@lang('common.login')</a></li>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <ul class="navbar-nav w-100 text-center">
            <li class="nav-item dropdown has-megamenu me-2 me-lg-0">
                <a class="nav-link nav-links-hover" href="#" data-bs-toggle="dropdown" data-bs-active=dropdown>
                    <i class="bi bi-stack"></i>
                    <span>Categories</span>
                </a>
                <div class="dropdown-menu megamenu container-fluid text-center border-0 shadow" role="menu">
                    <div class="row g-3">
                        <div class="col-lg-3 col-6">
                            <div class="col-megamenu">
                                <h6 class="title">Title Menu One</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-lg-3 col-6">
                            <div class="col-megamenu">
                                <h6 class="title">Title Menu Two</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                        <div class="col-lg-3 col-6">
                            <div class="col-megamenu">
                                <h6 class="title">Title Menu Three</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="col-megamenu">
                                <h6 class="title">Title Menu Four</h6>
                                <ul class="list-unstyled">
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                    <li><a href="#" class="dropdown-item nav-links-hover">Custom Menu</a></li>
                                </ul>
                            </div>  <!-- col-megamenu.// -->
                        </div><!-- end col-3 -->
                    </div><!-- end row -->
                </div> <!-- dropdown-mega-menu.// -->
            </li>

            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link  nav-links-hover" href="#">men</a>
            </li>
            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link  nav-links-hover" href="#">women</a>
            </li>
            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link  nav-links-hover" href="#">child</a>
            </li>
            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link  nav-links-hover" href="#">about</a>
            </li>
            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link nav-links-hover" href="#">Blog</a>
            </li>
            <li class="nav-item me-2 me-lg-0">
                <a class="nav-link nav-links-hover" href="#">Contact</a>
            </li>
        </ul>
    </div>

</nav>

