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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=' . rand(0, 1000) . '') }}" />

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
                        src="{{ asset('assets/companies/' . getCompanie()->id . '/' . getCompanie()->logo) }}"
                        width="110px" alt /></a>
                <div>
                    <a class="navbar-toggler offcanvas-nav-btn " type="button">
                        <i class='bx bx-chat iconeCompra'></i>

                    </a>

                    <a class="navbar-toggler  position-relative" href="{{ route('cart') }}">
                        <i class='bx bx-cart iconeCompra'></i>
                        <span id="cart-quantity"
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success bgBadgeM">{{ getCart() }}</span>
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
                                <a class="nav-link " href="{{ route('dashboard') }}">
                                    <i class="align-bottom bx bx-home"></i>
                                    <span class="ms-2 ">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="account-profile.html">
                                    <i class="align-bottom bx bx-user "></i>
                                    <span class="ms-2 ">Agendar Serviço</span>
                                    <span class="position-absolute  translate-middle badge rounded-pill bg-danger"
                                        style="margin-left:20px; background-color:#000000 !important">
                                        Breve
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">
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
                                <a class="nav-link " aria-current="page" href="{{ route('pay') }}">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Adicionar Saldo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('extrato') }}">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Extrato</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"
                                    href="{{ route('cashbacks', 'Cashback') }}">
                                    <i class="bi bi-piggy-bank"></i>
                                    <span class="ms-2">Cashback</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page"href="{{ route('cashbacks', 'Points') }}">
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


                            <hr>
                            <h6 class="subTitulosMenu">Minha conta</h6>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ route('pay') }}">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Meus dados</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#"
                                    data-bs-target="#uploadPhotoModal" data-bs-toggle="modal">
                                    <i class="bx bx-credit-card-front"></i>
                                    <span class="ms-2">Minha foto</span>
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
                                <a class="offcanvas-nav-btn position-relative" href="{{ route('cart') }}">

                                    <i class='bx bx-cart iconeCompra'></i>
                                    <span id="cart-quantity"
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">{{ getCart() }}</span>
                                </a>
                                <a href="{{ route('pay') }}" class="btn btn-primary "><i
                                        class='bx bx-credit-card-front'></i> Adicionar saldo</a>
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
                            <a href="#" data-bs-target="#uploadPhotoModal" data-bs-toggle="modal">
                                <div class=" position-relative">
                                    <img src="{{ Auth::user()->photo ? asset('assets/usuarios/' . Auth::user()->photo) : 'https://api.dicebear.com/9.x/fun-emoji/svg?radius=50&seed' . Auth::user()->name }}"
                                        alt="avatar" class="avatar avatar-lg rounded-circle" />
                                    <i class='bx bx-edit-alt coneEditar'></i>
                                </div>
                            </a>

                            <div class="ms-3">
                                <h5 class="mb-0"><a href="#"
                                        data-bs-target="#uploadPhotoModal">{{ Auth::user()->name }}</a></h5>

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
                                        <span class="position-absolute   translate-middle badge rounded-pill bg-danger"
                                            style="margin-left:20px; background-color:#000000 !important">
                                            Breve
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('services') }}">
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
                                    <a class="nav-link " aria-current="page" href="{{ route('pay') }}">
                                        <i class="bx bx-credit-card-front"></i>
                                        <span class="ms-2">Adicionar Saldo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/extrato') }}" aria-current="page"
                                        href="{{ route('extrato') }}">
                                        <i class="bx bx-credit-card-front"></i>
                                        <span class="ms-2">Extrato</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/cashbacks/Cashback') }}"
                                        aria-current="page" href="{{ route('cashbacks', 'Cashback') }}">
                                        <i class="bi bi-piggy-bank"></i>
                                        <span class="ms-2">Cashback</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link {{ setActiveMenu('/cashbacks/Points') }}" aria-current="page"
                                        href="{{ route('cashbacks', 'Points') }}">
                                        <i class="bx bx-gift"></i>
                                        <span class="ms-2">Meus pontos</span>
                                    </a>
                                </li>
                                <hr>
                                <h6 class="subTitulosMenu">Minha conta</h6>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="{{ route('dashboard') }}">
                                        <i class='bx bx-user-circle'></i>
                                        <span class="ms-2">Meus dados</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#"
                                        data-bs-target="#uploadPhotoModal" data-bs-toggle="modal">
                                        <i class='bx bx-camera'></i>
                                        <span class="ms-2">Minha foto</span>
                                    </a>
                                </li>


                                <hr>
                                <li class="nav-item">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" class="nav-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                                            <a href="{{ asset('dashboard') }}">
                                                <img src="{{ asset('assets/companies/' . getCompanie()->id . '/' . getCompanie()->logo) }}"
                                                    alt="logo" class="text-inverse w-25" />
                                            </a>
                                        </div>
                                        <p class="mb-5">
                                        <h4><a href="https://wa.me/55{{ getCompanie()->phone }}?text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20o%20{{ getCompanie()->company }}"
                                                target="_blank"><i class='bx bxl-whatsapp'></i>
                                                {{ getCompanie()->phone }}</a></h4>
                                        {{ getCompanie()->address }} <br>
                                        {{ getCompanie()->district }}<br>
                                        {{ getCompanie()->city }}<br>
                                        </p>
                                        <p>
                                            Todos os produtos e serviços aqui oferecidos <br>são de responsabilidade do
                                            <strong>{{ getCompanie()->razao }}</strong>
                                        </p>


                                    </div>
                                </div>
                                <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                                    <div class="row" id="ft-links">
                                        <div class="col-lg-3 col-12">

                                        </div>
                                        <div class="col-lg-5 col-12">
                                            <div
                                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                                <h5>{{ Auth::user()->name }}</h5>
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
                                                            class="text-decoration-none text-reset">Minha conta</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="#" data-bs-target="#uploadPhotoModal"
                                                            data-bs-toggle="modal"
                                                            class="text-decoration-none text-reset">Minha foto</a>
                                                    </li>
                                                    <li class="mb-2">
                                                        <a href="{{ route('extrato') }}"
                                                            class="text-decoration-none text-reset">Extrato</a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div
                                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                                <h5>{{ getCompanie()->company }}</h5>
                                                <a class="d-block d-lg-none stretched-link text-inherit"
                                                    data-bs-toggle="collapse"
                                                    href="{{ asset('#collapseResources') }}" role="button"
                                                    aria-expanded="false" aria-controls="collapseResources">
                                                    <i class="bi bi-chevron-down"></i>
                                                </a>
                                            </div>
                                            <div class="collapse d-lg-block" id="collapseResources"
                                                data-bs-parent="#ft-links">
                                                <div class="d-flex">
                                                    <div class="iconesBoxes">
                                                        <a href="https://wa.me/55{{ getCompanie()->phone }}?text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20o%20{{ getCompanie()->company }}"
                                                            target="_blank"><i class='bx bxl-whatsapp'></i></a>
                                                    </div>

                                                    <div class="iconesBoxes">
                                                        <a href="{{ getCompanie()->instagram ?? 'https://www.instagram.com/' }}"
                                                            target="_blank"><i class='bx bxl-instagram'></i></a>
                                                    </div>

                                                    <div class="iconesBoxes">
                                                        <a href="{{ getCompanie()->facebook ?? 'https://www.facebook.com/' }}"
                                                            target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                                                    </div>
                                                </div>
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

                    <!-- Modal para upload -->
                    <div class="modal fade" id="uploadPhotoModal" tabindex="-1"
                        aria-labelledby="uploadPhotoModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="photoUploadForm" action="{{ route('user.uploadPhoto') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="uploadPhotoModalLabel">Foto de Perfil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="photo" class="form-label">Escolha uma imagem (máximo
                                                2MB)</label>
                                            <input type="file" class="form-control" id="photo" name="photo"
                                                accept="image/*" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Salvar Foto</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

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

                    <script>
                        document.getElementById('photo').addEventListener('change', function() {
                            const file = this.files[0];
                            if (file.size > 2 * 1024 * 1024) { // 2MB
                                alert('A imagem deve ter no máximo 2MB.');
                                this.value = ''; // Limpa o campo
                            }
                        });
                    </script>
</body>


</html>
