@extends('layouts/main_layout')

@section('content')
    <div class="main-wrapper">
        {{-- hero section --}}
        <div class="hero-section wf-section">
            <div class="hero-background">
                <div class="container w-container">
                    <div class="hero-block">
                        <div class="hero-content">
                            <div data-w-id="7f7788dc-ef7d-c01a-e3d0-0996386d1dfb" style="opacity:0" class="hero-tag-block">
                                <!-- <div class="hero-tag">Explore the World with Us</div><img src="{{ url('assets/images/1/63b3b49c4632666b21607225_earth-location.png') }}" loading="lazy" alt="Hero Element" /></div> -->
                                <div class="hero-tag">Unforgettable Experiences Await!</div><img
                                    src="{{ url('assets/images/1/63b3b49c4632666b21607225_earth-location.png') }}"
                                    loading="lazy" alt="Hero Element" />
                            </div>
                            <h3 data-w-id="33ff6548-3d9e-71ec-31cb-fc3935dd9b4a" style="opacity:0"
                                class="display-1 hero-title">Where <span class="text-orange">wanderlust</span> meets
                                adventure</h3>
                            <p data-w-id="e23a2d25-2b77-61e3-e04d-c8a3d6cba114" style="opacity:0" class="hero-text">At Tour
                                Buddy, we are not just a travel company; we are a passionate community of explorers,
                                adventurers, and fun lovers.</p>
                            <div class="hero-button-group">
                                <a data-w-id="eaf0f860-7cff-594b-d060-7b455b73ad28" style="opacity:0"
                                    href="{{ url('bookings') }}" class="button-default background-orange w-button">Book
                                    Now</a>
                                <a data-w-id="cef8d2da-dfcd-6b2f-2c5f-cfd5270e2261" style="opacity:0"
                                    href="{{ url('about-us') }}" class="text-link-green">Plan a Trip</a>
                            </div>
                        </div>
                        <div data-w-id="a3e9db57-fc0c-ba59-eacf-8c88b01afe5e" style="opacity:0" class="hero-image"><img
                                width="600" src="{{ url('assets/images/1/63b3abed15f96008551dfb51_hero-img.png') }}"
                                loading="lazy" alt="Hero Image" /></div>
                    </div>
                </div>
                <div class="hero-element-1"><img
                        src="{{ url('assets/images/1/63b3b45bc096181bd82b7146_hero-element-1.svg') }}" loading="lazy"
                        alt="Hero Element" /></div>
                <div class="hero-element-2"><img
                        src="{{ url('assets/images/1/63b3b59219c92c85c34ca861_hero-element-2.svg') }}" loading="lazy"
                        alt="Hero Element" /></div>
            </div>
        </div>
        {{-- end hero section --}}


        {{-- filter  --}}

        @include('common/filter')
        {{-- end filter --}}

        {{-- what we provide --}}
        @include('common/what_we_provide')
        {{-- end what we provide --}}

        <!-- resources/views/home/index.blade.php -->
        <div class="destination-section wf-section">
            <div class="section-gap-bottom">
                <div class="container w-container">
                    <div class="section-wrapper section-flex section-justify-between">
                        <div class="section-block max-width-348">
                            <div data-w-id="31b47d96-ed01-173f-cfc2-495fbb2912d9" style="opacity:0"
                                class="section-tag-block">
                                <div class="hero-tag">Most Attractive</div>
                                <img src="{{ url('assets/images/1/63ba488de91f66f2c230d9d1_location.png') }}" loading="lazy"
                                    alt="Location Icon" />
                            </div>
                            <h1 data-w-id="7b0395cf-f6b6-3deb-8523-2d9165ecdd66" style="opacity:0" class="section-title">
                                Popular <span class="text-orange">Destination </span>we offer for all
                            </h1>
                        </div>
                        <div class="section-style-text-block">
                            <div data-w-id="6fcebd83-1bd0-5d75-5da8-855a6248a2e6" style="opacity:0"
                                class="section-style-text-header">
                                <span class="text-green">50+</span> Destinations
                            </div>
                            <p data-w-id="7a7b312b-f26b-92c9-640b-1c35a064dbc2" style="opacity:0"
                                class="section-style-paragraph">
                                We are known for our unique and immersive experiences, outstanding customer service, and
                                unwavering dedication to authenticity and sustainability.
                            </p>
                        </div>
                    </div>
                    {{-- start destination --}}
                    @include('common/destination')
                    {{-- end Destination --}}
                </div>
            </div>
        </div>

        {{-- tour packages --}}
        <div class="package-section wf-section">
            <div class="section-gap-bottom">
                <div class="container w-container">
                    <div class="section-wrapper section-flex section-justify-center">
                        <div class="section-block max-width-439">
                            <div data-w-id="9ded5477-16bf-da7d-a94d-dcf58cd4a91d" style="opacity:0"
                                class="section-tag-block flex-center">
                                <div class="hero-tag">Tour Packages</div><img
                                    src="{{ url('assets/images/1/63ba480be3ca2aed02dcda3b_camera-icon.png') }}"
                                    loading="lazy" alt="Camera Icon" />
                            </div>
                            <h1 data-w-id="9ded5477-16bf-da7d-a94d-dcf58cd4a921" style="opacity:0" class="section-title">
                                Most <span class="text-orange text-underline">Popular</span> Packages</h1>
                            <p data-w-id="0760bc3d-5515-e911-a5fd-aca33b696007" style="opacity:0"
                                class="section-text text-gray">Tour Buddy is one of the most popular Travel agency for who
                                want
                                to explore the Enugu with adventure</p>
                        </div>
                    </div>
                    <div class="package-block margin-top-40">
                        <div data-delay="4000" data-animation="slide" class="package-slider w-slider" data-autoplay="false"
                            data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                            data-nav-spacing="3" data-duration="500" data-infinite="true">

                            <div class="package-mask w-slider-mask">
                                {{-- start package --}}
                                @include('home_component/attractive_package')
                                {{-- end packages --}}
                            </div>
                            <div class="default-nav package-nav-right w-slider-arrow-left">
                                <div class="default-icon w-icon-slider-left"></div>
                            </div>
                            <div class="default-nav package-nav-left w-slider-arrow-right">
                                <div class="default-icon w-icon-slider-right"></div>
                            </div>
                            <div class="display-none w-slider-nav w-round"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- end packages --}}

        {{-- start Discount offer --}}
        @include('common/discount_offer')
    </div>

    {{-- end  Discount offer --}}

    @include('common/Discount')
    {{-- end Discount Packages --}}

    {{-- frequently asked question --}}

    @include('common/faqs')
    {{-- end frequently asked question --}}

    {{-- start Testimonies --}}
    <div class="testimonial-section wf-section">
        <div class="section-gap-bottom">
            <div class="container w-container">
                <div class="testimonial-block">
                    <div class="testimonial-image-block"><img src="{{ url('assets/images/2/img4.png?v=1') }}"
                            loading="lazy"
                            sizes="(max-width: 479px) 100vw, (max-width: 767px) 86vw, (max-width: 991px) 305.546875px, (max-width: 1279px) 438.875px, 600px"
                            srcset="{{ url('assets/images/2/img4.png?v=1') }} 500w, {{ url('assets/images/2/img4.png?v=1') }} 557w"
                            alt="Testimonial Image" class="responsive-image" /></div>
                    <div id="w-node-_2c8fc873-41ce-df95-c3bb-5c20df8c7b4e-96966625" class="testimonial-slider-block">
                        <div class="section-wrapper section-flex">
                            <div class="section-block max-width-439">
                                <div data-w-id="c3f83b45-e767-81bd-f121-ded60c10f81f" style="opacity:0"
                                    class="section-tag-block">
                                    <div class="hero-tag">Our Testimonials</div><img
                                        src="{{ url('assets/images/1/63ba47abe3ca2a2baadcd8d5_badge-icon.png') }}"
                                        loading="lazy" alt="Badge Icon" />
                                </div>
                                <h1 data-w-id="c3f83b45-e767-81bd-f121-ded60c10f823" style="opacity:0"
                                    class="section-title">Happy <span class="text-orange">Buddies </span><span
                                        class="text-green">expression</span></h1>
                            </div>
                        </div>
                        <div data-delay="4000" data-animation="slide" class="testimonial-slider w-slider"
                            data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false"
                            data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                            {{-- start sreams  --}}
                            @include('common/testimonies')
                            {{-- emd streams --}}
                            <div class="default-nav testimonial-nav-left w-slider-arrow-left">
                                <div class="default-icon w-icon-slider-left"></div>
                            </div>
                            <div class="default-nav testimonial-nav-right w-slider-arrow-right">
                                <div class="default-icon w-icon-slider-right"></div>
                            </div>
                            <div class="display-none w-slider-nav w-round"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end testimonoes --}}
    {{-- start newsletter --}}
    @include('common/news_letter')
    {{-- end newsletter --}}
    </div>
@endsection
