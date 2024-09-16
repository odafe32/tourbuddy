@extends('layouts/main_layout')

@section('content')
    {{-- wrapper --}}
    <div class="main-wrapper">
        {{-- intro --}}
        <div class="breadcrumb-section wf-section">
            <div class="breadcrumb-background">
                <div class="breadcrumb-gap">
                    <div class="container display-flex align-items-center text-center w-container">
                        <div class="breadcrumb-content">
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1beb" class="breadcrumb-tag">Packages</div>
                            <h1 data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bed" class="breadcrumb-title">Our Package</h1>
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bef" class="breadcrumb-text">Travor is one of
                                the most popular Travel agency for those who want to explore the world and try to make
                                adventure</div>
                        </div>
                    </div>
                    <div class="breadcrumb-element-1"><img
                            src="{{ url('assets/images/1/63b3b45bc096181bd82b7146_hero-element-1.svg') }}" loading="lazy"
                            alt="Hero Element" /></div>
                    <div class="breadcrumb-element-2"><img
                            src="{{ url('assets/images/1/63be4b0dac4c2a533ff151e1_breadcrumb-element-2.svg') }}"
                            loading="lazy" alt="Banner Element Image" /></div>
                </div>
            </div>
        </div>


        {{-- end wrapper --}}
    </div>
    {{-- end intro --}}
    <!-- resources/views/home/index.blade.php -->
    <div class="destination-section wf-section">
        <div class="section-gap-bottom">
            <div class="container w-container">

                {{-- start destination --}}
                @include('destination_component/destination_card')
                {{-- end Destination --}}
            </div>
        </div>
    </div>

    {{-- end --- --}}

    {{-- start newsletter --}}
    @include('common/news_letter')
    {{-- end newsletter --}}
    {{-- script --}}
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
@endsection
