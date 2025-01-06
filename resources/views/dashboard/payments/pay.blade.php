@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-10 col-md-10">

        <div class="mb-4">
            <h1 class="mb-0 h3">Adicionar fundos</h1>
        </div>

        <div class="card border-0 mb-4 shadow-sm">
            <div class="card-body p-lg-5">
                <div class="mb-6">
                    <h4 class="mb-0">Selecione o valor</h4>

                    <p class="fs-6 mb-0">Selecione o valor da recarga e receba na hora o cashback</p>
                </div>
                <div class="row gx-4">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                        <!--card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h3 class="mb-4 d-flex align-items-center">
                                        <span class="text-dark">R$400</span>
                                        <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> CASHBACK R$200</span>
                                    </h3>
                                </div>

                                <div class="mb-6">
                                    <h3 class="h4">Pacote ouro</h3>
                                    <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Comprar esse
                                        pacote</a>
                                </div>
                            </div>
                        </div>
                        <!--card-->
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                        <!--card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h3 class="mb-4 d-flex align-items-center">
                                        <span class="text-dark">R$400</span>
                                        <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> CASHBACK R$200</span>
                                    </h3>
                                </div>

                                <div class="mb-6">
                                    <h3 class="h4">Pacote ouro</h3>
                                    <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Comprar esse
                                        pacote</a>
                                </div>
                            </div>
                        </div>
                        <!--card-->
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                        <!--card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h3 class="mb-4 d-flex align-items-center">
                                        <span class="text-dark">R$400</span>
                                        <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> CASHBACK R$200</span>
                                    </h3>
                                </div>

                                <div class="mb-6">
                                    <h3 class="h4">Pacote ouro</h3>
                                    <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Comprar esse
                                        pacote</a>
                                </div>
                            </div>
                        </div>
                        <!--card-->
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                        <!--card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-5">
                                    <h3 class="mb-4 d-flex align-items-center">
                                        <span class="text-dark">R$400</span>
                                        <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> CASHBACK R$200</span>
                                    </h3>
                                </div>

                                <div class="mb-6">
                                    <h3 class="h4">Pacote ouro</h3>
                                    <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Comprar esse
                                        pacote</a>
                                </div>
                            </div>
                        </div>
                        <!--card-->
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0 mb-4 shadow-sm">
            <div class="card-body p-lg-5">
                <div class="mb-5">
                    <h4 class="mb-1">Formas de pagamento</h4>

                </div>
                <div class="d-flex gap-3">
                    <div class="border py-3 px-4 rounded-3" style="display: inline-block">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="./assets/images/landings/account/visa.svg" alt="card" class="me-3">
                                <div>
                                    <h6 class="mb-0">Cartão de credito</h6>
                                    <small>Em até 12x</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="border py-3 px-4 rounded-3" style="display: inline-block">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/pix.png') }}" alt="card" class="me-3" width="32px"
                                    height="21px">
                                <div>
                                    <h6 class="mb-0">Via PIX</h6>
                                    <small>Expires in 03/2026</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card border-0 mb-4 shadow-sm">
            <div class="card-body p-lg-5">
                <div class="mb-5">
                    <h4 class="mb-1">Histórico de depositos</h4>

                </div>

                <ul class="list-group list-group-flush mb-0">
                    <li class="list-group-item px-0 py-3 border-top">
                        <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                            <span>01 Feb 2023</span>
                            <span>$26.96</span>
                            <a href="#">PDF</a>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-3">
                        <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                            <span>31 Jan 2023</span>
                            <span>$34.30</span>
                            <a href="#">PDF</a>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-3">
                        <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                            <span>30 Jan 2023</span>
                            <span>$93.10</span>
                            <a href="#">PDF</a>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-3">
                        <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                            <span>29 Jan 2023</span>
                            <span>$44.39</span>
                            <a href="#">PDF</a>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-3 border-bottom">
                        <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                            <span>23 Jan 2023</span>
                            <span>$26.96</span>
                            <a href="#">PDF</a>
                        </div>
                    </li>
                </ul>

                <div class="mt-4">
                    <a href="#" class="icon-link icon-link-hover">
                        View All Invoices
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                            </path>
                        </svg>
                    </a>
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
