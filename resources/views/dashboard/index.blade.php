@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-10 col-md-10">
        <div class="mb-4">
            <h3 class="mb-0 h3">Olá {{ Auth::user()->name }}! Bem vindo ao {{ getCompanie()->company }}.</h3>
        </div>

        <div class="row mb-5 g-4">
            <div class="col-lg-6 col-md-6">
                <div class="card border-0 shadow-sm shadow-sm-semFundo">
                    <div class="card-body d-flex justify-content-between semFundo">
                        <div>
                            <span class="saldom"><i class="bi bi-wallet2"></i>
                                Saldo</span>
                            <h3 class="mb-0 mt-2 font16m" id="textContent" data-original="R${{ getBalance() }}">
                                R${{ getBalance() }}</h3>
                        </div>

                        <i id="toggleIcon" class="bi bi-eye icon" style="font-size: 20px;"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <span class="saldo"><i class="bi bi-piggy-bank"></i> Cashback</span>
                        <h3 class="mb-0 mt-2 font16">R${{ getBalanceCashBackAndPoints('Cashback') }}</h3>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <span class="saldo"><i class='bx bx-gift'></i> Meus pontos</span>
                        <h3 class="mb-0 mt-2 font16">{{ getBalanceCashBackAndPoints('Points') }}</h3>
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
                <a href="{{ route('pay') }}">
                    <div class="resumo text-center">
                        <div class="icones shadow-sm">
                            <i class='bx bx-credit-card-front'></i>
                        </div>
                        <span>Fazer recarga</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="{{ route('ecommerce') }}">
                    <div class="resumo text-center">
                        <div class="icones shadow-sm">
                            <i class='bx bx-purchase-tag-alt'></i>
                        </div>
                        <span>Nossos produtos</span>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="{{ route('extrato') }}">
                    <div class="resumo text-center">
                        <div class="icones shadow-sm">
                            <i class='bx bx-dollar-circle'></i>
                        </div>
                        <span>Extrato</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="{{ route('cashbacks', 'Cashback') }}">
                    <div class="resumo text-center">
                        <div class="icones shadow-sm">
                            <i class='bi bi-piggy-bank'></i>
                        </div>
                        <span>Cashback</span>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="{{ route('cashbacks', 'Points') }}">
                    <div class="resumo text-center">
                        <div class="icones shadow-sm">
                            <i class='bx bx-gift'></i>
                        </div>
                        <span>Meus pontos</span>
                    </div>
                </a>
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
                <h6 class="mb-lg-4">Pacotes de serviços exclusivos</h6>
            </div>
            <div id="pacotes" class="owl-carousel owl-theme">
                {{-- //@dd($getAllProductsWorks) --}}
                @foreach ($getAllProductsWorks as $getAllProductsWork)
                    <a
                        href="{{ route('ecommerce.detail', ['id' => $getAllProductsWork->id, 'title' => Str::slug($getAllProductsWork->title)]) }}">
                        <div class="box">
                            <figure class="mb-3 card-lift">
                                <img src="{{ $getAllProductsWork->photo ? asset('assets/clientes/' . $getAllProductsWork->photo . '') : asset('assets/sem-foto.gif') }}"
                                    alt="location" class="img-fluid rounded-3" />


                                {{-- <img src="{{ asset('assets/clientes/'.$getAllProductsWork->media_products->first()->photo_video.'') }}" alt="location"
                                class="img-fluid rounded-3" /> --}}
                            </figure>
                            <div class="d-flex">
                                <div class="ms-2">
                                    <h5 class="mb-3"> {{ $getAllProductsWork->title }} </h5>
                                    <div class="price d-flex justify-content-lg-start gap-4">
                                        @if ($getAllProductsWork->amount_promotion != 0)
                                            <div class="from line">
                                                R${{ number_format($getAllProductsWork->amount, 2, ',', '.') }}
                                            </div>
                                            <div class="to">
                                                R${{ number_format($getAllProductsWork->amount_promotion, 2, ',', '.') }}
                                            </div>
                                        @else
                                            <div class="to">
                                                R${{ number_format($getAllProductsWork->amount, 2, ',', '.') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>

        </div>

        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-12">
                <h6 class="mt-4">Nossos produtos</h6>
            </div>


            <div id="produtos" class="owl-carousel owl-theme">
                @foreach ($getAllProducts as $getAllProduct)
                    <a
                        href="{{ route('ecommerce.detail', ['id' => $getAllProduct->id, 'title' => Str::slug($getAllProduct->title)]) }}">
                        <div class="box">
                            <figure class="mb-3 card-lift">
                                <img src="{{ $getAllProduct->photo ? asset('assets/clientes/' . $getAllProduct->photo . '') : asset('assets/sem-foto.gif') }}"
                                    alt="location" class="img-fluid rounded-3" />
                            </figure>
                            <div class="d-flex">
                                <div class="ms-2">
                                    <h5 class="mb-3"> {{ $getAllProduct->title }} </h5>
                                    <div class="price d-flex justify-content-lg-start gap-4">
                                        @if ($getAllProduct->amount_promotion != 0)
                                            <div class="from line">
                                                R${{ number_format($getAllProduct->amount, 2, ',', '.') }}
                                            </div>
                                            <div class="to">
                                                R${{ number_format($getAllProduct->amount_promotion, 2, ',', '.') }}
                                            </div>
                                        @else
                                            <div class="to">
                                                R${{ number_format($getAllProduct->amount, 2, ',', '.') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach



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

<script>
    const textContent = document.getElementById('textContent');
    const toggleIcon = document.getElementById('toggleIcon');
    let isMasked = localStorage.getItem('isMasked') === 'true'; // Lê a preferência salva
    const maxLength = 12; // Limite máximo de caracteres na máscara

    function toggleVisibility() {
        if (!isMasked) {
            const originalText = textContent.textContent; // Salva o texto original completo
            textContent.setAttribute('data-original', originalText); // Armazena o texto original
            const maskedText = originalText.slice(0, maxLength).replace(/./g, '•'); // Aplica a máscara limitada a 8 caracteres
            textContent.textContent = maskedText;
        } else {
            textContent.textContent = textContent.getAttribute('data-original'); // Restaura o texto original completo
        }
        toggleIcon.className = isMasked ? 'bi bi-eye icon' : 'bi bi-eye-slash icon';
        isMasked = !isMasked;
        localStorage.setItem('isMasked', isMasked); // Salva a preferência
    }

    toggleIcon.addEventListener('click', toggleVisibility);

    // Define o estado inicial com base na preferência salva
    const originalText = textContent.textContent; // Texto original completo
    textContent.setAttribute('data-original', originalText); // Armazena o texto original completo

    if (isMasked) {
        const maskedText = originalText.slice(0, maxLength).replace(/./g, '•'); // Aplica a máscara limitada a 8 caracteres
        textContent.textContent = maskedText;
        toggleIcon.className = 'bi bi-eye-slash icon';
    } else {
        toggleIcon.className = 'bi bi-eye icon';
    }
</script>

@endsection
