<!doctype html>
<html lang="pt-br" data-bs-theme="light">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/block-safari-pinned-tab.svg') }}" color="#8b3dff" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />
    <meta name="msapplication-TileColor" content="#8b3dff" />
   

    <!-- Color modes -->
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{ asset('assets/libs/scrollcue/scrollCue.css') }}" />

    <!-- Box icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/boxicons.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    @yield('css')

    <title>Account Details - Responsive Website Template | Block</title>
</head>

<body>
    <div id="preloader">
        <img src="{{ asset('assets/loading.gif') }}" alt="Carregando...">
    </div>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="{{ route('dashboard') }}"><img
                        src="{{ asset('assets/images/logo.svg') }}" width="110px" alt /></a>
                <div>
                    <a class="navbar-toggler offcanvas-nav-btn " type="button">
                        <i class='bx bx-chat iconeCompra'></i>

                    </a>

                    <a class="navbar-toggler offcanvas-nav-btn" href="">
                        <i class='bx bx-cart iconeCompra'></i>

                    </a>
                    <a class="navbar-toggler offcanvas-nav-btn" type="button">
                        <i class="bi bi-list" style="font-size:26px"></i>
                    </a>


                </div>

                <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                    <div class="offcanvas-header">
                        <a href="{{ route('dashboard') }}" class="text-inverse"><img
                                src="{{ asset('assets/images/logo.svg') }}" width="110px" alt /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center ">
                        <ul class="navbar-nav mx-auto align-items-lg-center escondeD">
                            <h6 class="subTitulosMenu">Principal</h6>
                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/') }}" href="{{ route('dashboard') }}">
                                    <i class="align-bottom bx bx-home"></i>
                                    <span class="ms-2 ">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/pay') }}" href="account-profile.html">
                                    <i class="align-bottom bx bx-user"></i>
                                    <span class="ms-2">Agendar Serviço</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ecommerce') }}">
                                    <i class='bx bx-cut'></i>
                                    <span class="ms-2">Serviços exclusivos</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ecommerce') }}">
                                    <i class='bx bx-purchase-tag-alt'></i>
                                    <span class="ms-2">Nossos produtos</span>
                                </a>
                            </li>


                            <hr>
                            <h6 class="subTitulosMenu">Financeiro</h6>
                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                    href="{{ route('pay') }}">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Adicionar Saldo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                    href="{{ route('pay') }}">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Extrato</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                    href="{{ route('pay') }}">
                                    <i class="bi bi-piggy-bank"></i>
                                    <span class="ms-2">Economizado</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                    href="{{ route('pay') }}">
                                    <i class="bx bx-gift"></i>
                                    <span class="ms-2">Meus pontos</span>
                                </a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">
                                    <i class="align-bottom bx bx-log-out"></i>
                                    <span class="ms-2">Sair</span>
                                </a>
                            </li>



                        </ul>



                        <div class="mt-3 mt-lg-0 d-flex align-items-center">

                            <div class="d-flex align-items-center gap-4">
                                <a class="offcanvas-nav-btn  position-relative" type="button">

                                    <i class='bx bx-chat iconeCompra '></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+

                                    </span>
                                </a>
                                <a class="offcanvas-nav-btn position-relative" href="">

                                    <i class='bx bx-cart iconeCompra'></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                        3

                                    </span>
                                </a>
                                <a href="{{ route('pay') }}" class="btn btn-primary "><i
                                        class='bx bx-credit-card-front'></i> Adicionar fundos</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <!--Account home start-->
        <section class="py-lg-7 py-5 bg-light-subtle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-2 block">
                        <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
                            <img src="{{ asset('assets/images/avatar/avatar-1.jpg') }}" alt="avatar"
                                class="avatar avatar-lg rounded-circle" />
                            <div class="ms-3">
                                <h5 class="mb-0">Jitu Chauhan</h5>
                                <small>Personal account</small>
                            </div>
                        </div>
                        <!-- Navbar -->

                        <div class="d-md-none text-center d-grid">
                            <button class="btn btn-light mb-3 d-flex align-items-center justify-content-between"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountMenu"
                                aria-expanded="false" aria-controls="collapseAccountMenu">
                                Account Menu
                                <i class="bi bi-chevron-down ms-2"></i>
                            </button>
                        </div>
                        <div class="collapse d-md-block" id="collapseAccountMenu">
                            <ul class="nav flex-column nav-account">
                                <h6 class="subTitulosMenu">Principal</h6>
                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/') }}" href="{{ route('dashboard') }}">
                                        <i class="align-bottom bx bx-home"></i>
                                        <span class="ms-2 ">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/pay') }}" href="account-profile.html">
                                        <i class="align-bottom bx bx-user"></i>
                                        <span class="ms-2">Agendar Serviço</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ecommerce') }}">
                                        <i class='bx bx-cut'></i>
                                        <span class="ms-2">Serviços exclusivos</span>
                                    </a>
                                </li>
    
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('ecommerce') }}">
                                        <i class='bx bx-purchase-tag-alt'></i>
                                        <span class="ms-2">Nossas Ofertas</span>
                                    </a>
                                </li>


                                <hr>
                                <h6 class="subTitulosMenu">Financeiro</h6>
                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                        href="{{ route('pay') }}">
                                        <i class="bx bx-credit-card-front"></i>
                                        <span class="ms-2">Adicionar Saldo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                        href="{{ route('pay') }}">
                                        <i class="bx bx-credit-card-front"></i>
                                        <span class="ms-2">Extrato</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                        href="{{ route('pay') }}">
                                        <i class="bi bi-piggy-bank"></i>
                                        <span class="ms-2">Economizado</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/pay') }}" aria-current="page"
                                        href="{{ route('pay') }}">
                                        <i class="bx bx-gift"></i>
                                        <span class="ms-2">Meus pontos</span>
                                    </a>
                                </li>
                                <hr>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <i class="align-bottom bx bx-log-out"></i>
                                        <span class="ms-2">Sair</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @yield('content')

                    <!-- Footer -->
                    <footer class="pt-7">
                        <div class="container">
                            <!-- Footer 4 column -->
                            <div class="row">
                                <div class="col-xxl-5 col-lg-5 col-md-7">
                                    <div class="mb-7 mb-xl-0">
                                        <div class="mb-4">
                                            <a href="{{ asset('#') }}">
                                                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo"
                                                    class="text-inverse" />
                                            </a>
                                        </div>
                                        <p class="mb-5">Build faster websites with Block multipurpose bootstrap 5
                                            template. Duis
                                            imper diet mollis leo, quis ultrices erat ultrices simple dummy .</p>


                                    </div>
                                </div>
                                <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                                    <div class="row" id="ft-links">
                                        <div class="col-lg-4 col-12">
                                            <div class="position-relative">
                                                <div
                                                    class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                                    <h5>Landings</h5>
                                                    <a class="d-block d-lg-none stretched-link text-inherit"
                                                        data-bs-toggle="collapse"
                                                        href="{{ asset('#collapseLanding') }}" role="button"
                                                        aria-expanded="false" aria-controls="collapseLanding">
                                                        <i class="bi bi-chevron-down"></i>
                                                    </a>
                                                </div>
                                                <div class="collapse d-lg-block" id="collapseLanding"
                                                    data-bs-parent="#ft-links">
                                                    <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                                        <li class="mb-2">
                                                            <a href="{{ route('dashboard') }}"
                                                                class="text-decoration-none text-reset">Saas</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a href="{{ asset('#!') }}"
                                                                class="text-decoration-none text-reset">Software
                                                                Company</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a href="{{ asset('landing-finance.html') }}"
                                                                class="text-decoration-none text-reset">Finance</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a href="{{ asset('landing-jamstack-agancy.html') }}"
                                                                class="text-decoration-none text-reset">Digital
                                                                Agency</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a href="{{ asset('landing-conference.html') }}"
                                                                class="text-decoration-none text-reset">Conference</a>
                                                        </li>
                                                        <li class="mb-2">
                                                            <a href="{{ asset('#!') }}"
                                                                class="text-decoration-none text-reset">App
                                                                Template</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div
                                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                                <h5>Accounts</h5>
                                                <a class="d-block d-lg-none stretched-link text-inherit"
                                                    data-bs-toggle="collapse" href="{{ asset('#collapseAccounts') }}"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="collapseAccounts">
                                                    <i class="bi bi-chevron-down"></i>
                                                </a>
                                            </div>
                                            <div class="collapse d-lg-block" id="collapseAccounts"
                                                data-bs-parent="#ft-links">
                                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                                    <li class="mb-2">
                                                        <a href="{{ asset('signup.html') }}"
                                                            class="text-decoration-none text-reset">Register</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('signin.html') }}"
                                                            class="text-decoration-none text-reset">Login</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('forget-password.html') }}"
                                                            class="text-decoration-none text-reset">Forgot Password</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('reset-password.html') }}"
                                                            class="text-decoration-none text-reset">Reset Password</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('#!') }}"
                                                            class="text-decoration-none text-reset">Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div
                                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                                <h5>Resources</h5>
                                                <a class="d-block d-lg-none stretched-link text-inherit"
                                                    data-bs-toggle="collapse"
                                                    href="{{ asset('#collapseResources') }}" role="button"
                                                    aria-expanded="false" aria-controls="collapseResources">
                                                    <i class="bi bi-chevron-down"></i>
                                                </a>
                                            </div>
                                            <div class="collapse d-lg-block" id="collapseResources"
                                                data-bs-parent="#ft-links">
                                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                                    <li class="mb-2">
                                                        <a href="{{ asset('docs/index.html') }}"
                                                            class="text-decoration-none text-reset">Docs</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('#!') }}"
                                                            class="text-decoration-none text-reset">Support</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('changelog.html') }}"
                                                            class="text-decoration-none text-reset">Changelog</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('#!') }}"
                                                            class="text-decoration-none text-reset">Help
                                                            Center</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('#!') }}"
                                                            class="text-decoration-none text-reset">Community</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ asset('#!') }}"
                                                            class="text-decoration-none text-reset">Webinars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-7 mb-3">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="small mb-3 mb-md-0">
                                        Copyright © 2024

                                        <span class="text-primary"><a href="{{ asset('#') }}">
                                                {{ config('app.name') }}</a></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </footer>
                    <!-- Libs JS -->
                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
                    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
                    <script src="{{ asset('assets/libs/headhesive/dist/headhesive.min.js') }}"></script>

                    <!-- Theme JS -->
                    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
                    <script src="{{ asset('assets/js/vendors/sidenav.js') }}"></script>

                    @yield('scripts')

                    <script>
                        window.addEventListener("load", function() {
                            const preloader = document.getElementById("preloader");
                            const content = document.getElementById("content");

                            preloader.classList.add("hidden"); // Ativa a transição suave de opacidade
                            setTimeout(() => {
                                preloader.style.display = "none"; // Esconde o preloader completamente após a transição
                            }, 500);

                            content.style.display = "block"; // Mostra o conteúdo principal
                        });
                    </script>
</body>


</html>
