@extends('dashboard.layout.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="col-lg-10 col-md-10">

        <div class="mb-4">
            <h1 class="mb-0 h3">Cashback</h1>
        </div>


        <div class="card border-0 mb-4 shadow-sm">
            <div class="card-body p-lg-5 scrollCard">
                <div class="mb-5">
                    <h4 class="mb-1">Últimas movimentações</h4>

                </div>

                <ul class="list-group list-group-flush mb-0 wfit-content">
                    @forelse ($cashbacks as $cashback)
                    @php
                        if ($cashback->tipo == 'Cashback') {
                            $icone = 'bi-piggy-bank';
                            $color = '#e1972f';
                        }elseif ($cashback->tipo == 'Points') {
                            $icone = 'bx-gift';
                            $color = '#ffcc00';
                        }elseif ($cashback->tipo == 'Compra') {
                            $icone = 'bx-credit-card-front';
                            $color = '#72C953';
                        }else{
                            $icone = 'bx-credit-card-front';
                            $color = '#e1972f';
                        }
                    @endphp
                        <li class="list-group-item px-0 py-3 border-top">
                            <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                                <div style="width: 100px"><i class="bx {{ $icone }}" style="color:{{ $color }}"></i>  {{ $cashback->tipo }}</div>
                                <div style="width: 300px">{{ $cashback->description }}</div>
                                <div style="width: 100px">{{ ($cashback->tipo == 'Points') ? $cashback->amount.' Pontos' : 'R$'.number_format($cashback->amount, 2,',','.') }}</div>
                                <div style="width: 80px"><span class="badge {{ getStatusBadge($cashback->status)[1] }}">{{ getStatusBadge($cashback->status)[0]}}</span></div>
                                <div style="width: 153px">{{ $cashback->created_at }}</div>
                            </div>
                        </li>
                    @empty
                        Nenhuma movimentação
                    @endforelse


                </ul>

                <div class="mt-4">
                    <div class="d-flex justify-content-center">
                        {{ $cashbacks->links() }}
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
