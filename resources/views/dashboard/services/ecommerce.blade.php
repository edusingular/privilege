@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-10 col-md-10">



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

       
        <div class="row g-4 mb-4">
            <div class="col-lg-12 col-md-12 col-12">
                <h6 class="mt-4">{{ isset($showCategorie)  ? $showCategorie->title : 'Nossos produtos '}}</h6>
            </div>
        </div>

        <div class="row">
            @forelse ($getAllProducts as $getAllProduct)
                <div class="col-md-3 mb-5 col-6">
                    <a
                        href="{{ route('ecommerce.detail', ['id' => $getAllProduct->id, 'title' => Str::slug($getAllProduct->title)]) }}">
                        <div>

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
                </div>
            @empty

                <div class="col-lg-12 col-md-12 col-12">
                    <h6 class="mt-4">Nenhum produto encontrado</h6>
                </div>
            @endforelse



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
        $('#pill').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoHeight: true,
            nav: false,
            autoWidth: true,

            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 6
                },
                1000: {
                    items: 12
                }
            }
        })
    </script>
@endsection
