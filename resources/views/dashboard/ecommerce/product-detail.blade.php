@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endsection
@section('content')
    <div class="col-md-10 d-flex">
        <div class="row">
            <div class="col-md-6 product-images-wrapper">
                <div class="preview-image-wrapper">
                    <img src="{{ asset('assets/clientes/' . $getSingleProduct->media_products->first()->photo_video . '') }}"
                        class="preview-image" alt="Product Image" />
                    <div class="arrows hide-for-desktop">
                        <div class="next">
                            <img src="{{ asset('assets/icon-next.svg') }}" alt="Next Icon" />
                        </div>
                        <div class="prev">
                            <img src="{{ asset('assets/icon-previous.svg') }}" alt="Previous Icon" />
                        </div>
                    </div>
                    <div class="count">
                        <p>
                            <span class="current"></span> of
                            <span class="total"></span>
                        </p>
                    </div>
                </div>

                <div class="thumbs-wrapper hide-for-mobile">
                    @foreach ($getSingleProduct->media_products as $media)
                        <div class="thumb-image active">
                            <img src="{{ asset('assets/clientes/' . $media->photo_video . '') }}"
                                style="    border-radius: 20px;" alt="{{ $getSingleProduct->title }}" />
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="col-md-6  product-details-wrapper">
                <p class="product-brabd">{{ $getSingleProduct->title }}</p>
                <h1 class="product-title">{{ $getSingleProduct->title }}</h1>
                <p class="product-description">
                    {{ $getSingleProduct->description }}
                </p>

                <div class="product-price">
                    @if ($getSingleProduct->amount_promotion != 0)
                        <div class="previous-price-wrapper">
                            <span class="previous-price">
                                R${{ number_format($getSingleProduct->amount, 2, ',', '.') }}</span>
                        </div>
                        <div class="current-price-wrapper">
                            <h2 class="current-price">
                                R${{ number_format($getSingleProduct->amount_promotion, 2, ',', '.') }}</h2>

                        </div>
                    @else
                        <div class="current-price-wrapper">
                            <h2 class="current-price">R${{ number_format($getSingleProduct->amount, 2, ',', '.') }}</h2>

                        </div>
                    @endif




                </div>

                <form action="#" class="add-to-cart-form">
                    <div class="product-quantity">
                        <button type="button" class="button minus">
                            <img src="{{ asset('assets/icon-minus.svg') }}" alt="Minus Icon" />
                        </button>
                        <span class="product-quantity-num">0</span>
                        <button type="button" class="button plus">
                            <img src="{{ asset('assets/icon-plus.svg') }}" alt="Plus Icon" />
                        </button>
                    </div>

                    <button type="submit" aria-label="Add to cart" class="button add-btn">
                        <i class="bx bx-cart iconeCompra" style="color: #fff"></i>
                        Adicionar no carrinho
                    </button>

                    <p class="form-alert"></p>
                </form>
            </div>
        </div>
    </div>
    <!-- LightBox -->
    <div class="lightbox-wrapper">
        <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>
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
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
