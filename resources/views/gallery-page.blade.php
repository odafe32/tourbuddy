@extends('layouts/main_layout')

@section('content')
    <div class="main-wrapper">
        {{-- intro --}}
        <div class="breadcrumb-section wf-section">
            <div class="breadcrumb-background">
                <div class="breadcrumb-gap">
                    <div class="container display-flex align-items-center text-center w-container">
                        <div class="breadcrumb-content">
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1beb" class="breadcrumb-tag">Gallery</div>
                            <h1 data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bed" class="breadcrumb-title">Our Gallery</h1>
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

        {{-- GALLERY --}}

        @include('gallery_component/gallery')
        {{-- END GALLERY --}}
    </div>
@endsection
