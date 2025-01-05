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
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                        <!--card-->
                                        <div class="card">
                                           <div class="card-body">
                                              <div class="mb-5">
                                                 <h3 class="mb-4 d-flex align-items-center">
                                                    <span class="text-dark">$49.99</span>
                                                    <span class="text-body-tertiary ms-2 fs-6 fw-normal">/ month</span>
                                                 </h3>
                                              </div>
                                              <div class="mb-6">
                                                 <h3 class="h4">Starter</h3>
                                                 <p class="mb-0">Ideal for developers actively developing before going to prod.</p>
                                              </div>
                                              <div class="d-grid">
                                                 <a href="{{ route('pay.create') }}" class="btn btn-outline-primary">Free Trial for 14 Days</a>
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
                                    <h4 class="mb-1">Payment Methods</h4>
                                    <p class="fs-6 mb-0">The block theme notification system notifies you of important
                                        events
                                        such as replies, mentions, updates, etc.</p>
                                </div>
                                <div class="border py-3 px-4 rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./assets/images/landings/account/visa.svg" alt="card"
                                                class="me-3">
                                            <div>
                                                <h6 class="mb-0">Visa ending in 1234</h6>
                                                <small>Expires in 03/2025</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="dropdown dropstart">
                                                <a class="text-reset" href="#" role="button"
                                                    id="paymentDropdown1" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-three-dots-vertical"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="paymentDropdown1">
                                                    <span class="dropdown-header">Setting</span>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z">
                                                            </path>
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Remove</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-credit-card"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z">
                                                            </path>
                                                            <path
                                                                d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Make it Primary</span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border py-3 px-4 rounded-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./assets/images/landings/account/mastercard.svg" alt="card"
                                                class="me-3">
                                            <div>
                                                <h6 class="mb-0">Master ending in 1234</h6>
                                                <small>Expires in 03/2026</small>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="dropdown dropstart">
                                                <a class="text-reset" href="#" role="button"
                                                    id="paymentDropdown2" data-bs-toggle="dropdown"
                                                    data-bs-offset="-20,20" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-three-dots-vertical"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="paymentDropdown2">
                                                    <span class="dropdown-header">Setting</span>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor"
                                                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z">
                                                            </path>
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Remove</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-credit-card"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z">
                                                            </path>
                                                            <path
                                                                d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z">
                                                            </path>
                                                        </svg>
                                                        <span class="ms-2">Make it Primary</span>
                                                    </a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary mt-4" data-bs-toggle="modal"
                                    data-bs-target="#paymentModal">Add Payment Method</a>
                            </div>
                        </div>
                        <div class="card border-0 mb-4 shadow-sm">
                            <div class="card-body p-lg-5">
                                <div class="mb-5">
                                    <h4 class="mb-1">Invoice History</h4>
                                    <p class="fs-6 mb-0">The Invoice History Report is needed to justify the balance for a
                                        given
                                        range of invoices.</p>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
