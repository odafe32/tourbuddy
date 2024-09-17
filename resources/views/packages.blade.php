@extends('layouts/main_layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('node_modules/swiper/swiper-bundle.min.css') }}">
    <div class="main-wrapper">
        <div class="breadcrumb-section wf-section" style="margin-bottom: 40px;">
            <div class="breadcrumb-background">
                <div class="breadcrumb-gap">
                    <div class="container display-flex align-items-center text-center w-container">
                        <div class="breadcrumb-content">
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1beb" class="breadcrumb-tag">
                                Packages
                            </div>
                            <h1 data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bed" class="breadcrumb-title">
                                Our Tour Packages
                            </h1>
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bef" class="breadcrumb-text">
                                At Tourbuddy, we offer a variety of exciting travel packages designed for every kind of
                                traveler. Whether you're seeking adventure, relaxation, or cultural immersion, our packages
                                are tailored to provide you with unforgettable experiences.
                            </div>

                        </div>
                    </div>
                    <div class="breadcrumb-element-1">
                        <img src={{ url('assets/images/1/63b3b45bc096181bd82b7146_hero-element-1.svg') }} loading="lazy"
                            alt="Hero Element" />
                    </div>
                    <div class="breadcrumb-element-2">
                        <img src={{ url('assets/images/1/63be4b0dac4c2a533ff151e1_breadcrumb-element-2.svg') }}
                            loading="lazy" alt="Hero Element" />
                        {{-- <img
              src="../assets.website-files.com/63b261b98057c80332966627/63be4b0dac4c2a533ff151e1_breadcrumb-element-2.svg"
              loading="lazy"
              alt="Banner Element Image"
            /> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- filter  --}}

        @include('common/filter')
        {{-- end filter --}}



        {{-- tour packages --}}
        <div class="package-section wf-section " style="margin-top: 100px">
            <div class="section-gap-bottom">
                <div class="container w-container">
                    <div class="section-wrapper section-flex section-justify-center">

                    </div>

                    <div class="package-block mt-14">
                        <!-- Swiper Slider -->
                        <div class="swiper mySwiper">
                            @include('packages_component/package_card')
                            <!-- Swiper Navigation -->
                            {{-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div> --}}

                        </div>
                        <div class="swiper-pagination" style="margin-top: 30px"></div>
                    </div>
                </div>
            </div>
        </div>



        {{-- end packages --}}
        {{-- start newsletter --}}
        @include('common/news_letter')
        {{-- end newsletter --}}
    </div>

    <script src="{{ asset('node_modules/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });
    </script>
@endsection
