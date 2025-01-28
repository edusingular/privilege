@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-10 col-md-10">

        <div class="mb-4">
            <h1 class="mb-0 h3">Adicionar saldo</h1>
        </div>

        <div class="card border-0 mb-4 shadow-sm">
            <div class="card-body p-lg-5">
                <div class="mb-6">
                    <h4 class="mb-0">Escolha o melhor pacote</h4>

                    <p class="fs-6 mb-0">Selecione o valor da recarga e receba na hora o cashback</p>
                </div>
                <div class="row gx-4">

                    @forelse ($packages as $package)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-4">
                        <!--card-->
                        <div class="card" style="height: 350px">
                            <div class="card-body" style="display: flex;flex-direction: column;align-content: flex-start;justify-content: space-between;">
                                <div class="mb-5">
                                    <h3 class="mb-4 d-flex align-items-center justify-content-between">
                                        <span class="text-dark">R${{ number_format($package->amount, 2,',','.') }}</span>
                                        <div class="d-flex flex-column align-items-end">
                                            <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> CASHBACK <strong>R${{ number_format($package->cashback, 2,',','.') }}</strong></span>
                                            <span class="text-body-tertiary ms-2 fs-6 fw-semibold"> PONTOS <strong>{{ $package->points }}</strong></span>
                                        </div>
                                    </h3>
                                    <h5 class="pacotesSaldo"></h5>
                                </div>

                                <div class="mb-6">
                                    <h3 class="h4">{{ $package->title }}</h3>
                                    <p class="mb-0">Comprando o <strong>{{ $package->title }}</strong> você terá um saldo de <strong>R${{ number_format($package->cashback + $package->amount), 2,',','.' }}</strong> + {{ $package->points }} pontos, para poder usar em nosso estabelecimento ou em nossa  <strong><a href="{{ route('ecommerce') }}">loja virtual</a></strong>.</p>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Comprar esse
                                        pacote</a>
                                </div>
                            </div>
                        </div>
                        <!--card-->
                    </div>
                    @empty
                        <h5>Nenhum pacote encontrado</h5>
                    @endforelse



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
        @include('dashboard.Extrato.partiais.extratoPartiais')

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
