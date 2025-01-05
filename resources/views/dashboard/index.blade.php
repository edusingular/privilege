@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
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
                        <span class="saldo"><i class="bi bi-piggy-bank"></i> Economizado</span>
                        <h3 class="mb-0 mt-2 font16">R$40.61</h3>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <span class="saldo"><i class='bx bx-gift'></i> Meus pontos</span>
                        <h3 class="mb-0 mt-2 font16">700</h3>
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
                        <i class='bx bx-credit-card-front'></i>
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
                    <div class="item"> <img src="{{ asset('./assets/clientes/banner/2.webp') }}" alt=""
                            srcset=""> </div>
                    <div class="item"> <img src="{{ asset('./assets/clientes/banner/1.webp') }}" alt=""
                            srcset=""> </div>

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
                        <img src="{{ asset('assets/clientes/kit-iconico-leleburnier.webp') }}" alt="location"
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

                <div class="box">

                    <figure class="mb-3 card-lift">
                        <img src="{{ asset('assets/clientes/1.webp') }}" alt="location" class="img-fluid rounded-3" />
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
