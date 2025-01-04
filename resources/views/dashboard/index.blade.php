@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <main>
        <!--Account home start-->
        <section class="py-lg-7 py-5 bg-light-subtle">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-2 block">
                        <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
                            <img src="assets/images/avatar/avatar-1.jpg" alt="avatar"
                                class="avatar avatar-lg rounded-circle" />
                            <div class="ms-3">
                                <h5 class="mb-0">Jitu Chauhan</h5>
                                <small>Personal account</small>
                            </div>
                        </div>
                        <!-- Navbar -->
                        <div class="mb-4 text-center text-md-start">
                            <a href="#" class="text-reset">
                                <span>
                                    <span>View site / profile</span>
                                </span>
                                <span class="ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                                        <path fill-rule="evenodd"
                                            d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
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
                                <li class="nav-item">
                                    <a class="nav-link active" href="account-home.html">
                                        <i class="align-bottom bx bx-home"></i>
                                        <span class="ms-2 ">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account-profile.html">
                                        <i class="align-bottom bx bx-user"></i>
                                        <span class="ms-2">Agendar Serviço</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="account-security.html">
                                        <i class="align-bottom bx bx-lock-alt"></i>
                                        <span class="ms-2">Recarregar Saldo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account-billing.html">
                                        <i class="align-bottom bx bx-credit-card-front"></i>
                                        <span class="ms-2">Explorar Ofertas</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account-team.html">
                                        <i class="align-bottom bx bx-user-plus"></i>
                                        <span class="ms-2">Team</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="account-notification.html">
                                        <i class="align-bottom bx bx-bell"></i>
                                        <span class="ms-2">Notifications</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <i class="align-bottom bx bx-log-out"></i>
                                        <span class="ms-2">Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10">
                        <div class="mb-4">
                            <h3 class="mb-0 h3">Olá Eduardo Dutra! Bem vindo de volta.</h3>
                        </div>

                        <div class="row mb-5 g-4">
                            <div class="col-lg-6 col-md-6">
                                <div class="card border-0 shadow-sm shadow-sm-semFundo">
                                    <div class="card-body d-flex justify-content-between semFundo">
                                        <div>
                                            <span class="saldom"><i class="bi bi-wallet2"></i>
                                                 Saldo</span>
                                            <h3 class="mb-0 mt-2 font16m">R$1350.00</h3>
                                        </div>
                                        
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <span class="saldo"><i class='bx bx-gift' ></i> Meus pontos</span>
                                        <h3 class="mb-0 mt-2 font16">700</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <span class="saldo"><i class="bi bi-piggy-bank"></i> Economizado</span>
                                        <h3 class="mb-0 mt-2 font16">R$40.61</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="resumo" class="iconesResumo d-flex owl-carousel owl-theme my-4">
                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-qr-scan'></i>
                                    </div>
                                    <span>Pagar com QRcode</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-credit-card-front' ></i>
                                    </div>
                                    <span>Fazer recarga</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-dollar-circle'></i>
                                    </div>
                                    <span>Extrato</span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-dollar-circle'></i>
                                    </div>
                                    <span>Extrato</span>
                                </div>
                            </div>

                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-dollar-circle'></i>
                                    </div>
                                    <span>Extrato</span>
                                </div>
                            </div>


                            <div class="item">
                                <div class="resumo text-center">
                                    <div class="icones shadow-sm">
                                        <i class='bx bx-dollar-circle'></i>
                                    </div>
                                    <span>Extrato</span>
                                </div>
                            </div>

                           



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="banner" class="owl-carousel owl-theme">
                                    <div class="item"> <img src="{{ asset('./assets/clientes/banner/2.webp') }}"
                                            alt="" srcset=""> </div>
                                    <div class="item"> <img src="{{ asset('./assets/clientes/banner/1.webp') }}"
                                            alt="" srcset=""> </div>

                                </div>
                            </div>
                        </div>


                        <div class="row g-4">
                            <div class="col-lg-12 col-md-12 col-12">
                                <h6 class="mb-lg-4">Pacotes exclusivos</h6>
                            </div>
                            <div id="pacotes" class="owl-carousel owl-theme">
                                <div class="box">

                                    <figure class="mb-3 card-lift">
                                        <img src="{{ asset('assets/clientes/massagem.webp') }}" alt="location"
                                            class="img-fluid rounded-3" />
                                    </figure>
                                    <div class="d-flex">
                                        <div class="ms-2">
                                            <h5 class="mb-3"> Kit Regeneração Capilar Kérastase Chronologiste </h5>
                                            {{-- <span class="descricao">Tratamento de regeneração capilar que revitaliza
                                            completamente o cabelo e o couro cabeludo com sofisticada experiência sensorial.
                                        </span> --}}
                                            <div class="price d-flex justify-content-lg-start gap-4">
                                                <div class="from">
                                                    R$520.00
                                                </div>
                                                <div class="to">
                                                    R$120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="box">

                                    <figure class="mb-3 card-lift">
                                        <img src="{{ asset('assets/clientes/156991-500-auto.webp') }}" alt="location"
                                            class="img-fluid rounded-3" />
                                    </figure>
                                    <div class="d-flex">
                                        <div class="ms-2">
                                            <h5 class="mb-3"> Kit Regeneração Capilar Kérastase Chronologiste </h5>
                                            {{-- <span class="descricao">Tratamento de regeneração capilar que revitaliza
                                            completamente o cabelo e o couro cabeludo com sofisticada experiência sensorial.
                                        </span> --}}
                                            <div class="price d-flex justify-content-lg-start gap-4">
                                                <div class="from">
                                                    R$520.00
                                                </div>
                                                <div class="to">
                                                    R$120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row g-4">
                            <div class="col-lg-12 col-md-12 col-12">
                                <h6 class="mt-4">Nossos produtos</h6>
                            </div>


                            <div id="produtos" class="owl-carousel owl-theme">
                                <div class="box">

                                    <figure class="mb-3 card-lift">
                                        <img src="{{ asset('assets/clientes/kit-iconico-leleburnier.webp') }}"
                                            alt="location" class="img-fluid rounded-3" />
                                    </figure>
                                    <div class="d-flex">
                                        <div class="ms-2">
                                            <h5 class="mb-3"> Kit Regeneração Capilar Kérastase Chronologiste </h5>
                                            <div class="price d-flex justify-content-lg-start gap-4">
                                                <div class="from">
                                                    R$520.00
                                                </div>
                                                <div class="to">
                                                    R$120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">

                                    <figure class="mb-3 card-lift">
                                        <img src="{{ asset('assets/clientes/1.webp') }}" alt="location"
                                            class="img-fluid rounded-3" />
                                    </figure>
                                    <div class="d-flex">
                                        <div class="ms-2">
                                            <h5 class="mb-3"> Kit Regeneração Capilar Kérastase Chronologiste </h5>
                                            <div class="price d-flex justify-content-lg-start gap-4">
                                                <div class="from">
                                                    R$520.00
                                                </div>
                                                <div class="to">
                                                    R$120.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
        </section>


        <!--Account home end-->
    </main>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#banner').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoHeight: true,
            nav: false,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
        $('#pacotes').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoHeight: true,
            nav: false,

            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
        $('#produtos').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoHeight: true,
            nav: false,

            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })

        $('#resumo').owlCarousel({
            loop: false,
            margin: 5,
            autoplay: false,
            autoHeight: true,
            nav: false,
            stagePadding: 20,
            responsive: {
                0: {
                    items: 4
                },
                600: {
                    items: 5
                },
                1000: {
                    items: 12
                }
            }
        })
    </script>
@endsection
