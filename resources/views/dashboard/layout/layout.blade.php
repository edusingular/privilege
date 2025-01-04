<!doctype html>
<html lang="pt-br" data-bs-theme="light">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicon/site.html') }}" />
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/block-safari-pinned-tab.svg') }}" color="#8b3dff" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />
    <meta name="msapplication-TileColor" content="#8b3dff" />


    <!-- Color modes -->
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />

    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{ asset('assets/libs/scrollcue/scrollCue.css') }}" />

    <!-- Box icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/boxicons.min.css') }}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    @yield('css')

    <title>Account Details - Responsive Website Template | Block</title>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light w-100 fixed-top">
            <div class="container px-3">
                <a class="navbar-brand" href="{{ asset('index.html') }}"><img
                        src="{{ asset('assets/images/logo/logo.svg') }}" alt /></a>
                <button class="navbar-toggler offcanvas-nav-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                    <div class="offcanvas-header">
                        <a href="{{ asset('index.html') }}" class="text-inverse"><img
                                src="{{ asset('assets/images/logo/logo.svg') }}" alt /></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center">
                        <ul class="navbar-nav mx-auto align-items-lg-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ asset('index.html') }}">Landing Overview</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-sass-v1.html') }}">Saas
                                            v.1</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-sass-v2.html') }}">Sass
                                            v.2</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ asset('landing-it-company.html') }}">IT
                                            Company</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ asset('landing-seo.html') }}">Seo Agency</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-accounting.html') }}">Accounting</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('landing-finance.html') }}">Finance</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-jamstack-agancy.html') }}">Jamstack Agency</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-conference.html') }}">Conference</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('landing-personal.html') }}">Personal</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu dropdown-menu-xxl">
                                    <div class="row row-cols-lg-4 row-cols-1 g-0">
                                        <div class="col">
                                            <div>
                                                <div>
                                                    <div class="dropdown-header">Blog</div>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('blog-list-view.html') }}">List View</a>
                                                    <a class="dropdown-item" href="{{ asset('blog.html') }}">Grid
                                                        View</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('blog-grid-thumbnail.html') }}">Grid View
                                                        v.2</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('blog-sidebar.html') }}">Sidebar</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('blog-category.html') }}">Category</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('blog-single.html') }}">Single Post</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="dropdown-header">About</div>
                                                    <a class="dropdown-item" href="{{ asset('about.html') }}">About
                                                        v.1</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('about-v2.html') }}">About v.2</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mt-3 mt-lg-0">
                                                <div>
                                                    <div class="dropdown-header">Service</div>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('service-v1.html') }}">Service v.1</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('service-v2.html') }}">Service v.2</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('service-v3.html') }}">Service v.3</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="dropdown-header">Events</div>

                                                    <a class="dropdown-item"
                                                        href="{{ asset('events.html') }}">List</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('event-single.html') }}">Single</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="dropdown-header">Contact</div>

                                                    <a class="dropdown-item"
                                                        href="{{ asset('contact-1.html') }}">Contact Us</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('contact-2.html') }}">Contact Sales</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mt-3 mt-lg-0">
                                                <div>
                                                    <div class="dropdown-header">Portfolio</div>

                                                    <a class="dropdown-item"
                                                        href="{{ asset('portfolio.html') }}">Grid View</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('portfolio-3-columns.html') }}">
                                                        3 Columns
                                                        <span class="badge text-bg-success ms-2">New</span>
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ asset('portfolio-single.html') }}">Single View</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="dropdown-header">Pricing</div>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('pricing-v1.html') }}">Pricing v.1</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('pricing-v2.html') }}">Pricing v.2</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div class="dropdown-header">Career</div>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('career.html') }}">Career</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mt-3 mt-lg-0">
                                                <div>
                                                    <div class="dropdown-header">Integration</div>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('integration.html') }}">Grid View</a>
                                                    <a class="dropdown-item"
                                                        href="{{ asset('integration-single.html') }}">Single</a>
                                                </div>
                                                <div class="mt-3">
                                                    <div>
                                                        <div class="dropdown-header">Case Study</div>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('case-study.html') }}">Grid View</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-fullwidth">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Blocks</a>
                                <div class="dropdown-menu p-4">
                                    <div class="row row-cols-xl-6 row-cols-lg-5 row-cols-1 gx-lg-4">
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/hero.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/hero-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Hero</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/navbar.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/header-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Navbar</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/about.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/about-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>About</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/blog.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/blog-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Blog</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/carousel.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/carousel-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Carousel</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/case-study.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/case-study-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Case Study</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/cta.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/call-to-action-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Call to Action</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/clients.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/clients-logo-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Client</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/contact.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/contact-section-example.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Contact</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/form.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2"><img
                                                        class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/form-snippets-bootstrap.svg') }}"
                                                        alt="" /></div>
                                                <span>Form</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/faq.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2"><img
                                                        class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/faq-section-example.svg') }}"
                                                        alt="" /></div>
                                                <span>FAQ</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/team.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2"><img
                                                        class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/team-snippets-bootstrap.svg') }}"
                                                        alt="" /></div>
                                                <span>Team</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/footer.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/footer-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Footer</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/features.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/feature-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Features</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/integration.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/integration-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Integration</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/industry.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/industry-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Industry</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/location.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/location-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Location</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/portfolio.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/portfolio-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Portfolio</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/process.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/process-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Process</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/pricing.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2 bg-gray-200">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/pricing-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Pricing</span>
                                            </a>
                                        </div>

                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/facts.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/stats-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Stats</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-item d-block px-0 mb-lg-3"
                                                href="{{ asset('blocks/testimonails.html') }}">
                                                <div class="rounded d-none d-lg-block mb-lg-2">
                                                    <img class="w-100 rounded-2"
                                                        src="{{ asset('assets/images/block/testimonial-snippets-bootstrap.svg') }}"
                                                        alt="" />
                                                </div>
                                                <span>Testimonials</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Accounts</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-profile.html') }}">Profile</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-security.html') }}">Security</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-billing.html') }}">Billing</a></li>
                                    <li><a class="dropdown-item" href="{{ asset('account-team.html') }}">Team</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-notification.html') }}">Notifications</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-app-integration.html') }}">Integration</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-device-session.html') }}">Session</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-social-links.html') }}">Social</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ asset('account-appearance.html') }}">Appearance</a></li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle"
                                            href="{{ asset('#') }}">Authentication</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header">Simple</li>

                                            <li>
                                                <a class="dropdown-item" href="{{ asset('signin.html') }}">Sign
                                                    In</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ asset('signup.html') }}">Sign
                                                    Up</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('forget-password.html') }}">Forget Password</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('reset-password.html') }}">Reset Password</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('otp-varification.html') }}">OTP Varification</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li class="dropdown-header">Side Cover</li>

                                            <li>
                                                <a class="dropdown-item" href="{{ asset('signin-v2.html') }}">Sign
                                                    In</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="{{ asset('signup-v2.html') }}">Sign
                                                    Up</a>
                                            </li>

                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('forget-password-v2.html') }}">Forget Password</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('reset-password-v2.html') }}">Reset Password</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('otp-varification-v2.html') }}">OTP
                                                    Varification</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu dropend">
                                        <a class="dropdown-item dropdown-toggle"
                                            href="{{ asset('#') }}">Utility</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="{{ asset('404-error.html') }}">404
                                                    Error</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ asset('changelog.html') }}">Changelog</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ asset('#') }}" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Docs</a>
                                <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item mb-3 text-body" href="{{ asset('docs/index.html') }}">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-file-text fs-4 text-primary"></i>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">Documentations</h5>
                                                <p class="mb-0 fs-6">Browse the all documentation</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item text-body" href="{{ asset('docs/changelog.html') }}">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-clipboard fs-4 text-primary"></i>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">
                                                    Changelog
                                                    <span class="text-primary ms-1"></span>
                                                </h5>
                                                <p class="mb-0 fs-6">See what's new</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-3 mt-lg-0 d-flex align-items-center">
                            <a href="{{ asset('signin.html') }}" class="btn btn-light mx-2">Login</a>
                            <a href="{{ asset('signup.html') }}" class="btn btn-primary">Create account</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="pt-7">
        <div class="container">
            <!-- Footer 4 column -->
            <div class="row">
                <div class="col-xxl-5 col-lg-5 col-md-7">
                    <div class="mb-7 mb-xl-0">
                        <div class="mb-4">
                            <a href="{{ asset('#') }}">
                                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo"
                                    class="text-inverse" />
                            </a>
                        </div>
                        <p class="mb-5">Build faster websites with Block multipurpose bootstrap 5 template. Duis
                            imper diet mollis leo, quis ultrices erat ultrices simple dummy .</p>

                        <form class="needs-validation" novalidate>
                            <h5 class="mb-3">Subscribe to our newsletter</h5>
                            <div class="row g-2">
                                <div class="col-lg-9 col-8">
                                    <label for="subscribeEmail" class="visually-hidden">Email</label>
                                    <input type="email" class="form-control" id="subscribeEmail"
                                        placeholder="Email address" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                </div>
                                <div class="col-lg-3 col-4">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                    <div class="row" id="ft-links">
                        <div class="col-lg-4 col-12">
                            <div class="position-relative">
                                <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                                    <h5>Landings</h5>
                                    <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                        href="{{ asset('#collapseLanding') }}" role="button" aria-expanded="false"
                                        aria-controls="collapseLanding">
                                        <i class="bi bi-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="collapse d-lg-block" id="collapseLanding" data-bs-parent="#ft-links">
                                    <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                        <li class="mb-2">
                                            <a href="{{ asset('index.html') }}"
                                                class="text-decoration-none text-reset">Saas</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('#!') }}"
                                                class="text-decoration-none text-reset">Software Company</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-finance.html') }}"
                                                class="text-decoration-none text-reset">Finance</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-jamstack-agancy.html') }}"
                                                class="text-decoration-none text-reset">Digital Agency</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('landing-conference.html') }}"
                                                class="text-decoration-none text-reset">Conference</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{ asset('#!') }}"
                                                class="text-decoration-none text-reset">App Template</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div
                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                <h5>Accounts</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                    href="{{ asset('#collapseAccounts') }}" role="button" aria-expanded="false"
                                    aria-controls="collapseAccounts">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="{{ asset('signup.html') }}"
                                            class="text-decoration-none text-reset">Register</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('signin.html') }}"
                                            class="text-decoration-none text-reset">Login</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('forget-password.html') }}"
                                            class="text-decoration-none text-reset">Forgot Password</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('reset-password.html') }}"
                                            class="text-decoration-none text-reset">Reset Password</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('#!') }}"
                                            class="text-decoration-none text-reset">Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div
                                class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                                <h5>Resources</h5>
                                <a class="d-block d-lg-none stretched-link text-inherit" data-bs-toggle="collapse"
                                    href="{{ asset('#collapseResources') }}" role="button" aria-expanded="false"
                                    aria-controls="collapseResources">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                                <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                    <li class="mb-2">
                                        <a href="{{ asset('docs/index.html') }}"
                                            class="text-decoration-none text-reset">Docs</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('#!') }}"
                                            class="text-decoration-none text-reset">Support</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('changelog.html') }}"
                                            class="text-decoration-none text-reset">Changelog</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('#!') }}" class="text-decoration-none text-reset">Help
                                            Center</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('#!') }}"
                                            class="text-decoration-none text-reset">Community</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="{{ asset('#!') }}"
                                            class="text-decoration-none text-reset">Webinars</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-7 mb-3">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="small mb-3 mb-md-0">
                        Copyright © 2024

                        <span class="text-primary"><a href="{{ asset('#') }}">Block Bootstrap 5 Theme</a></span>
                        | Designed by
                        <span class="text-primary"><a href="{{ asset('#') }}">CodesCandy</a></span>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- Libs JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/headhesive/dist/headhesive.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/sidenav.js') }}"></script>

    @yield('scripts')
</body>


</html>
