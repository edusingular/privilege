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
                    <img src="{{ $getSingleProduct->photo ? asset('assets/clientes/'.$getSingleProduct->photo.'') : asset('assets/sem-foto.gif') }}"
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
                            <span class="current"></span> de
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
                <p class="product-brabd">{{ $getSingleProduct->categories->title }}</p>
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


                <form id="add-to-cart-form" class="add-to-cart-form">
                    <div class="product-quantity">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $getSingleProduct->id }}">
                        <div class="product-quantity productMM">
                            <button type="button" class="buttonMM button minus">
                                <img src="{{ asset('assets/icon-minus.svg') }}" alt="Minus Icon" />
                            </button>
                            <span class="product-quantity-num">1</span>
                            <button type="button" class="buttonMM button plus">
                                <img src="{{ asset('assets/icon-plus.svg') }}" alt="Plus Icon" />
                            </button>
                        </div>
                        
                        <button type="button" id="add-to-cart-btn" class="button add-btn">Adicionar ao Carrinho</button>
                    </div>
                </form>

                <div id="cart-message" style="display:none;"></div>
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


    <script>
        $(document).ready(function() {
            $('#add-to-cart-btn').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('cart.add') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Incluindo o token CSRF diretamente
                        product_id: $('input[name="product_id"]').val(),
                        quantity: parseInt(document.querySelector('.product-quantity-num')
                            .textContent)
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // Exibe a mensagem de sucesso
                            $('#cart-message').text(response.message).show().fadeOut(5000);

                            // Atualiza a quantidade no ícone do carrinho
                            $('#cart-quantity').text(response.cart_quantity);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Ocorreu um erro. Tente novamente.');
                    }
                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pega os elementos
            const minusButton = document.querySelector('.button.minus');
            const plusButton = document.querySelector('.button.plus');
            const quantitySpan = document.querySelector('.product-quantity-num');

            // Inicializa a quantidade a partir do valor do span
            let quantity = parseInt(quantitySpan.textContent);

            // Evento para diminuir a quantidade
            minusButton.addEventListener('click', function() {
                if (quantity > 0) {
                    quantity--;
                    quantitySpan.textContent = quantity; // Atualiza o valor do span com a quantidade
                }
            });

            // Evento para aumentar a quantidade
            plusButton.addEventListener('click', function() {
                quantity++;
                quantitySpan.textContent = quantity; // Atualiza o valor do span com a quantidade
            });
        });
    </script>
@endsection
