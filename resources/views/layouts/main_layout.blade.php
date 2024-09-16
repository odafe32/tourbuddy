<!DOCTYPE html>
<html lang="en-US" data-wf-page="{{ $data_wf_page }}" data-wf-site="63b261b98057c80332966627">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BFB4N0D1JW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BFB4N0D1JW');
    </script>
    <meta charset="utf-8" />
    <title>{{ $meta_title }}</title>
    <meta name="description" content="{{ $meta_desc }}">
    <meta name="author" content="Tour Buddy">
    <meta content="{{ $meta_desc }}" name="description" />
    <meta content="{{ $meta_title }}" property="og:title" />
    <meta content="{{ $meta_desc }}" property="og:description" />
    <meta content="{{ $meta_title }}" property="twitter:title" />
    <meta content="{{ $meta_desc }}" property="twitter:description" />
    <meta content="{{ $meta_image }}" property="og:image" />
    <meta content="{{ $meta_image }}" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Tour Buddy" name="generator" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- PWA Assets -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ url('pwa_assets/apple-touch-icon.png?v=' . env('CACHE_VERSION')) }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ url('pwa_assets/favicon-32x32.png?v=' . env('CACHE_VERSION')) }}">
    <link rel="icon" type="image/png" sizes="194x194"
        href="{{ url('pwa_assets/favicon-194x194.png?v=' . env('CACHE_VERSION')) }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ url('pwa_assets/android-chrome-192x192.png?v=' . env('CACHE_VERSION')) }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ url('pwa_assets/favicon-16x16.png?v=' . env('CACHE_VERSION')) }}">
    <link rel="manifest" href="{{ url('pwa_assets/site.webmanifest?v=' . env('CACHE_VERSION')) }}">
    <link rel="mask-icon" href="{{ url('pwa_assets/safari-pinned-tab.svg?v=' . env('CACHE_VERSION')) }}"
        color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('favicon.ico?v=' . env('CACHE_VERSION')) }}">
    <meta name="apple-mobile-web-app-title" content="Tour Buddy">
    <meta name="application-name" content="Tour Buddy">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="{{ url('pwa_assets/mstile-144x144.png?v=' . env('CACHE_VERSION')) }}">
    <meta name="msapplication-config" content="{{ url('pwa_assets/browserconfig.xml?v=' . env('CACHE_VERSION')) }}">
    <meta name="theme-color" content="#ffffff">


    <link href="{{ url('assets/css/style.css?v=' . env('CACHE_VERSION')) }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('assets/js/jquery-3.5.1.min.js?v=' . env('CACHE_VERSION')) }}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Works on Firefox */
        * {
            scrollbar-width: thin !important;
            scrollbar-color: #84af3d transparent !important;
        }

        /* Works on Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 5px !important;
            height: 5px !important;
        }

        *::-webkit-scrollbar-track {
            background: transparent !important;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #84af3d !important;
            border-radius: 20px !important;
            border: 3px solid transparent !important;
        }

        .iti {
            display: block !important;
        }
    </style>

</head>

<body>
    {{ csrf_field() }}
    <div id="Scroll-To-Top" class="page-wrapper">
        <div class="header-section position-absolute wf-section">
            <div class="container w-container">
                <div class="header-block">
                    <a href="{{ url('/') }}" aria-current="page" class="w-nav-brand w--current"><img
                            src="{{ url('pwa_assets/android-chrome-96x96.png') }}" loading="lazy" alt="Logo" /></a>
                    <div class="nav-block">
                        <div data-animation="over-left" data-collapse="medium" data-duration="400" data-easing="ease"
                            data-easing2="ease" role="banner" class="navbar w-nav">
                            <nav role="navigation" class="nav-menu w-nav-menu">
                                <div class="mobile-logo">
                                    <a href="{{ url('/') }}" aria-current="page"
                                        class="w-nav-brand w--current"><img
                                            src="{{ url('pwa_assets/android-chrome-96x96.png') }}" loading="lazy"
                                            alt="Logo" /></a>
                                </div>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf37" href="{{ url('/') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Home</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf37" href="{{ url('about-us') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Know Tour Buddy</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf37" href="{{ url('packages') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Packages</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf3b" href="{{ url('destinations') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Destinations</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf4c" href="{{ url('gallery') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Gallery</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>

                                <a data-w-id="bcc18f66-e4a2-0b9d-057c-ab2069ebcf50" href="{{ url('contact-us') }}"
                                    class="header-nav-block w-inline-block">
                                    <div class="header-nav-text">Contact</div>
                                    <div class="header-link-bottom-border"></div>
                                </a>
                            </nav>
                            <div class="menu-button w-nav-button">
                                <div class="menu-span"></div>
                                <div class="menu-span menu-center"></div>
                                <div class="menu-span"></div>
                            </div>
                        </div>
                        <div class="user-event">
                            <!-- <a href="login.html" class="header-link">Login</a> -->
                            <a href="{{ url('bookings') }}"
                                class="button-small background-light-sea-green w-button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <div class="footer-section wf-section">
            <div data-w-id="90f44924-d304-47b6-1dca-000678c8920d" class="footer-top">
                <div class="section-gap">
                    <div class="container w-container">
                        <div class="footer-block">
                            <div data-w-id="90f44924-d304-47b6-1dca-000678c89211" class="footer-widget footer-about">
                                <a href="{{ url('/') }}" aria-current="page"
                                    class="footer-logo-link w-inline-block w--current"><img
                                        src="{{ url('pwa_assets/android-chrome-96x96.png') }}" loading="lazy"
                                        alt="Logo" class="footer-logo-image" /></a>
                                <p class="paragraph-small text-gray footer-about-text">Welcome to Tour Buddy, where
                                    wanderlust meets adventure and unforgettable experiences await!</p>
                                <ul role="list" class="social-list">
                                    <li class="social-list-item">
                                        <a href="https://www.facebook.com/officialtourbuddy" target="_blank"
                                            class="social-link w-inline-block"><img
                                                src="{{ url('assets/images/1/63bba21de91f660694488c55_facebook.svg') }}"
                                                loading="lazy" alt="Official Tour Buddy Facebook Handle" /></a>
                                    </li>
                                    <li class="social-list-item">
                                        <a href="https://www.twitter.com/" target="_blank"
                                            class="social-link w-inline-block"><img
                                                src="{{ url('assets/images/1/63bba21d3d3d7a42e06eda07_twitter.svg') }}"
                                                loading="lazy" alt="Official Tour Buddy Twitter Handle" /></a>
                                    </li>
                                    <li class="social-list-item">
                                        <a href="https://www.instagram.com/officialtourbuddy" target="_blank"
                                            class="social-link w-inline-block"><img
                                                src="{{ url('assets/images/1/63bba21de3ca2ab661f39f8e_instagram.svg') }}"
                                                loading="lazy" alt="Official Tour Buddy Instagram Handle" /></a>
                                    </li>
                                </ul>
                            </div>
                            <div data-w-id="90f44924-d304-47b6-1dca-000678c89220" class="footer-widget">
                                <div class="footer-title">Company</div>
                                <ul role="list" class="footer-nav-list w-list-unstyled">
                                    <li class="footer-nav-list-item"><a href="{{ url('about-us') }}"
                                            class="footer-text-link">Know Tour Buddy</a></li>
                                    <li class="footer-nav-list-item"><a href="{{ url('destinations') }}"
                                            class="footer-text-link">Destinations</a></li>
                                    <li class="footer-nav-list-item"><a href="{{ url('packages') }}"
                                            class="footer-text-link">Packages</a></li>
                                    <li class="footer-nav-list-item"><a href="{{ url('gallery') }}"
                                            class="footer-text-link">Gallery</a></li>
                                    <li class="footer-nav-list-item"><a href="{{ url('contacts') }}"
                                            class="footer-text-link">Contacts</a></li>
                                </ul>
                            </div>
                            <div data-w-id="90f44924-d304-47b6-1dca-000678c89233" class="footer-widget">
                                <div class="footer-title">Resources</div>
                                <ul role="list" class="footer-nav-list w-list-unstyled">
                                    <li class="footer-nav-list-item"><a href="javascript:;"
                                            class="footer-text-link">FAQs</a></li>
                                    <li class="footer-nav-list-item"><a href="javascript:;"
                                            class="footer-text-link">Terms & Condition</a></li>
                                </ul>
                            </div>
                            <div data-w-id="90f44924-d304-47b6-1dca-000678c89246" class="footer-widget">
                                <div class="footer-title">Contact</div>
                                <div class="footer-info-block">
                                    <div class="footer-info-text text-gray">14b Umuezebi Street New Haven, Enugu,
                                        Nigeria</div>
                                    <div class="footer-phone">
                                        <a href="tel:+2348109952138" class="footer-phone-link">+234 810 995 2138</a>
                                    </div>
                                    <!-- <a href="http://www.tourbuddyng.com/" class="footer-website-link">www.tourbuddyng.com</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-element-1"><img
                        src="{{ url('assets/images/1/63bbddf1c04c8a8fa353ad4c_footer-element-1.svg') }}"
                        loading="lazy" alt="Footer Element Icon" /></div>
                <div class="footer-element-2"><img
                        src="{{ url('assets/images/1/63bbde0d7fceb0d38c67d93b_footer-element-2.svg') }}"
                        loading="lazy" alt="Footer Element Icon" /></div>
            </div>
            <div data-w-id="90f44924-d304-47b6-1dca-000678c89257" class="footer-bottom">
                <div class="container w-container">
                    <div class="footer-bottom-block">
                        <div class="footer-left-block">
                            <div data-w-id="90f44924-d304-47b6-1dca-000678c8925b" class="copyright-block">
                                <div class="copyright-text">© {{ date('Y') }} Tour Buddy. All Rights Reserved.
                                    Powered by <a href="https://teranium.co/" target="_blank"
                                        class="text-decoration-none">Teranium Co</a>.</div>
                            </div>
                        </div>
                        <div data-w-id="90f44924-d304-47b6-1dca-000678c89264" class="footer-right-block">
                            <img src="{{ url('assets/images/1/63bbd7c0f1d8290ab24fb586_payment%20method.svg') }}"
                                loading="lazy" alt="Payment Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#Scroll-To-Top" class="scroll-to-top w-inline-block"><img
            src="{{ url('assets/images/1/63d9fb239e0ef03655dee7db_arrow-up.svg') }}" loading="lazy"
            alt="Arrow Image" /></a>

    <link rel="stylesheet" type="text/css" href="{{ url('iziToast/css/iziToast.min.css') }}">
    <script src="{{ url('iziToast/js/iziToast.min.js') }}" async="async" type="text/javascript"></script>

    <script defer src="{{ url('assets/js/script.js?v=' . env('CACHE_VERSION')) }}"></script>

    <script>
        $(document).ready(function() {
            url = window.location.href;
            val = $('.nav-menu').find('a[href="' + url + '"]');
            if (url == val.attr('href')) {
                val.addClass('active');
            } else if (url == "{{ url('/') }}/") {
                $('.home').addClass('active');
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });

            <?php if(Session::has('message')){?>
            <?php echo session('message'); ?>
            <?php }?>
        })

        function printErrorMsg(msg) {
            var errorText = "";
            $.each(msg, function(key, value) {
                errorText += '<li>' + value + '</li>';
            });

            toastr.error("", errorText, {
                positionClass: "toast-top-center",
                containerId: "toast-top-center",
                hideDuration: 5000, // 00 = secs, 000 = minutes
            })
        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
</body>

</html>
