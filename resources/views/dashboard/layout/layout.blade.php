<!doctype html>
<html lang="pt-br" data-bs-theme="light">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="{{ asset('index.html') }}"><img
                        src="{{ asset('assets/images/logo.svg') }}" width="110px" alt /></a>
                        <div>
                            <a class="navbar-toggler offcanvas-nav-btn" type="button">
                                <i class='bx bx-chat iconeCompra'></i>
                            </a>
                            <a  class="navbar-toggler offcanvas-nav-btn" href="">
                                <i class='bx bx-cart iconeCompra'></i>
                            </a>
                            <a class="navbar-toggler offcanvas-nav-btn" type="button">
                                <i class="bi bi-list" style="font-size:26px"></i>
                            </a>


                        </div>
              
                <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                    <div class="offcanvas-header">
                        <a href="{{ asset('index.html') }}" class="text-inverse"><img
                                src="{{ asset('assets/images/logo.svg') }}" width="110px" alt /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center ">
                        <ul class="navbar-nav mx-auto align-items-lg-center escondeD">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Sobre</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ asset('index.html') }}">Landing Overview</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-sass-v1.html') }}">Saas
                                            v.1</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-sass-v2.html') }}">Sass
                                            v.2</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ asset('landing-it-company.html') }}">IT
                                            Company</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ asset('landing-seo.html') }}">Seo Agency</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-accounting.html') }}">Accounting</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-finance.html') }}">Finance</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-jamstack-agancy.html') }}">Jamstack Agency</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-conference.html') }}">Conference</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-personal.html') }}">Personal</a></li>
                                </ul>
                            </li>
                      
                           
                           
                        </ul>
                        <div class="mt-3 mt-lg-0 d-flex align-items-center">
                          
                            <div class="d-flex align-items-center gap-4">
                                <a class="offcanvas-nav-btn" type="button">
                                  
                                    <i class='bx bx-chat iconeCompra'></i>
                                </a>
                                <a  class="offcanvas-nav-btn" href="">
                                   
                                    <i class='bx bx-cart iconeCompra'></i>
                                </a>
                                <a href="" class="btn btn-primary btnNovo"><i class='bx bx-credit-card-front'></i> Adicionar fundos</a>
                             </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>
    </header>

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
                        <p class="mb-5">Build faster websites with Block multipurpose bootstrap 5 template. Duis
                            imper diet mollis leo, quis ultrices erat ultrices simple dummy .</p>

                        
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                    <div class="row" id="ft-links">
                        <div class="col-lg-4 col-12">
                            <div class="position-relative">
                                <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                    <h5>Landings</h5>
                                    <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                        href="{{ asset('#collapseLanding') }}" role="button" aria-expanded="false"
                                        aria-controls="collapseLanding">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="collapse d-lg-block" id="collapseLanding" data-bs-parent="#ft-links">
                                    <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                        <li class="mb-2">
                                            <a href="{{ asset('index.html') }}"
                                                class="text-decoration-none text-reset">Saas</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('#!') }}"
                                                class="text-decoration-none text-reset">Software Company</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-finance.html') }}"
                                                class="text-decoration-none text-reset">Finance</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-jamstack-agancy.html') }}"
                                                class="text-decoration-none text-reset">Digital Agency</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-conference.html') }}"
                                                class="text-decoration-none text-reset">Conference</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('#!') }}"
                                                class="text-decoration-none text-reset">App Template</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div
                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                <h5>Accounts</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                    href="{{ asset('#collapseAccounts') }}" role="button" aria-expanded="false"
                                    aria-controls="collapseAccounts">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
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
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                    href="{{ asset('#collapseResources') }}" role="button" aria-expanded="false"
                                    aria-controls="collapseResources">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
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
                                        <a href="{{ asset('#!') }}" class="text-decoration-none text-reset">Help
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

                        <span class="text-primary"><a href="{{ asset('#') }}"> {{ config('app.name') }}</a></span>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- Libs JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/headhesive/dist/headhesive.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/sidenav.js') }}"></script>

    @yield('scripts')
</body>


</html>
