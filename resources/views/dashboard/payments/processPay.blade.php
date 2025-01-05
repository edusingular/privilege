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
                <div class="row">
                    <div class="col-md-6 col-12">
                        <small class="text-primary text-uppercase ls-md fw-bold">Service</small>
                        <h4 class="my-3">Escaneie o QR code com seu aplicativo de banco<h4>

                        <div class="d-flex w-100     justify-content-center">
                            <div class="border py-3 px-4 rounded-3 mb-3 mt-4" style="display: inline-flex">
                                {!! $qrcode !!}
                            </div>
                        </div>
                      
                    </div>
                    <div class="col-md-6 col-12 mb-10">
                        <div class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-6 bg-lighten">
                            <!--begin::Labels-->
                            <div class="mb-8">
                                <span class="badge rounded-pill text-bg-warning">esperando</span>
                            </div>
                            <!--end::Labels-->

                            <!--begin::Title-->
                            <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">
                                DETALHES DE PAGAMENTO</h6>
                            <!--end::Title-->

                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-semibold text-gray-600 fontUpp">Comprar:
                                </div>
                                <div class="fw-bold text-gray-800 fs-6">
                                    Rendimento real
                                </div>
                            </div>

                            <div class="mb-6">
                                <div class="fw-semibold text-gray-600 fontUpp">Valor:
                                </div>
                                <div class="fw-bold text-gray-800 fs-6">
                                    R$ 10.000,00
                                </div>
                            </div>




                            <!--end::Item-->

                            <!--begin::Item-->

                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="mb-15">
                                <div class="fw-semibold text-gray-600 fontUpp">comprar</div>

                                <div class="fw-bold fs-6 text-gray-800 d-flex align-items-center" style="text-transform: uppercase;">
                                    True Yield Finance LTDA
                                </div>
                            </div>

                                                                            <!--end::Item-->

                            <!--begin::Title-->
                            <h6 class="mb-8 fw-bolder text-gray-600 text-hover-primary">
                                <hr>
                            </h6>
                            <!--end::Title-->

                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-semibold text-gray-600 fontUpp">Intermediário de pagamento</div>
                                <div class="fw-bold fs-6 text-gray-800">
                                    Agencia Singular de Marketing Digital LTDA <br> 
                                </div>
                            </div>

                            <!--end::Item-->
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
