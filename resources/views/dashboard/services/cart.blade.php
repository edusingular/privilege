@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-7 col-md-7">

        <div class="row">
            <div class="card border-0 mb-4 shadow-sm">
                <div class="card-body p-lg-5">
                    <div class="mb-5">
                        <h4 class="mb-1">Meu Carrinho</h4>
                        {{-- <p class="mb-0 fs-6">List of member are in your team with its roles.</p> --}}
                    </div>
                    <div class="table-responsive">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table table-centered td table-centered th table-lg text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="fs-6 text-dark fw-semibold">Produto</div>
                                    </th>
                                    <th scope="col">
                                        <div class="fs-6 text-dark fw-semibold">Quantidade</div>
                                    </th>
                                    <th scope="col">
                                        <div class="fs-6 text-dark fw-semibold">Valor</div>
                                    </th>
                                    <th scope="col">
                                        <div class="fs-6 text-dark fw-semibold">Total</div>
                                    </th>
                                    <th scope="col">
                                        <div class="fs-6 text-dark fw-semibold"></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0; // Inicialize a variável total com 0
                                @endphp
                                @forelse ($getCarts as $getCart)
                                    {{-- @dd($getCart->product) --}}
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $getCart->product->photo ? asset('assets/clientes/' . $getCart->product->photo . '') : asset('assets/sem-foto.gif') }}"
                                                    alt="avatar" class="avatar avatar-lg rounded">
                                                <div class="ms-3">
                                                    <div class="fs-5 fw-semibold text-dark">{{ $getCart->product->title }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span>{{ $getCart->quantity }}</span></td>
                                        <td>R${{ number_format($getCart->price, 2, ',', '.') }}</td>
                                        <td>R${{ number_format($getCart->total, 2, ',', '.') }}</td>
                                        <td><a href="{{ route('cart.delete', $getCart->id) }}"><i
                                                    class='bx bx-trash'></i></a></td>
                                    </tr>
                                    @php
                                        $total += $getCart->total;
                                    @endphp
                                @empty
                                <div class="mb-5 text-center">
                                    <h4 class="mb-1">Nenhum item no carrinho</h4>
                                    <a href="{{ route('ecommerce') }}" class="btn btn-primary">Veja nossos produtos</a>
                                </div>
                                @endforelse

                        
                            </tbody>

                        </table>
                        <div class="d-flex justify-content-end">
                            <p style="font-weight: 800;">Total: R${{ number_format($total, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="col-md-3">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-lg-5">
                <div class="mb-5">
                    <h6 class="mb-1">Metodos de pagamento</h6>
                    {{-- <p class="mb-0 fs-6">Edit your personal information and address.</p> --}}
                </div>
                <div>
                    <div class="d-flex">
                        <p style="font-weight: 800;">Total: R${{ number_format($total, 2, ',', '.') }}</p>
                    </div>
                    <div class="card border-0 mb-4 mb-lg-3 bg-light-subtle">
                        <div class="card-body py-lg-3 px-lg-4">
                            <div class="mb-5">
                                <h6>Pagar com saldo</h6>
                                <h3 class="mb-0 mt-2 font16m" id="textContent" data-original="R$1350.00">R$1350.00</h3>
                            </div>

                            <a href="" class="btn btn-primary w-100 "><i class="bx bx-credit-card-front"></i> Pagar com saldo</a>
                        </div>
                    </div>

                    <div class="card border-0 mb-4 mb-lg-0 bg-light-subtle">
                        <div class="card-body py-lg-3 px-lg-4">
                            <div class="mb-5">
                                <h6>Pagar com Pontos</h6>
                                <h3 class="mb-0 mt-2 font16m" id="textContent" data-original="R$1350.00">4350</h3>
                            </div>

                            <a href="" class="btn btn-primary w-100 "><i class="bx bx-gift"></i> Pagar com pontos</a>
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
