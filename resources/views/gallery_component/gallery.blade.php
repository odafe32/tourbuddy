{{-- <link rel="stylesheet" href="/light box gallery/css/lightbox.css"> --}}
<link rel="stylesheet" href="{{ url('lightbox/css/lightbox.css?v=' . env('CACHE_VERSION')) }}">
<link rel="stylesheet" href="{{ url('lightbox/css/lightbox.min.css') }}">
{{-- <link rel="stylesheet" href="/light box gallery/style.css"> --}}
{{-- csss --}}
{{-- array --}}
<?php
$gallery = [
    [
        'link_image' => 'assets/images/Destination/image2.jpg',
        'image' => 'assets/images/Destination/image2.jpg',
        'alt' => 'Ikirike Hill and Cliff',
        'title' => 'Ikirike Hill and Cliff',
    ],
    [
        'link_image' => 'assets/images/Destination/image5.jpg',
        'image' => 'assets/images/Destination/image5.jpg',
        'alt' => 'Unity Park',
        'title' => 'Unity Park',
    ],
    [
        'link_image' => 'assets/images/Destination/image4.jpg',
        'image' => 'assets/images/Destination/image4.jpg',
        'alt' => 'Adada Dam',
        'title' => 'Adada Dam',
    ],
    [
        'link_image' => 'assets/images/Destination/image6.jpg',
        'image' => 'assets/images/Destination/image6.jpg',
        'alt' => 'Iyi Nzu Waterfall',
        'title' => 'Iyi Nzu Waterfall',
    ],
    [
        'link_image' => 'assets/images/Destination/image7.jpg',
        'image' => 'assets/images/Destination/image7.jpg',
        'alt' => 'Awhum Waterfall',
        'title' => 'Awhum Waterfall',
    ],
];
?>
{{-- close array --}}

<style>
    .container1 {
        margin: 40px 60px;
        display: flex;
        justify-content: center;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(4, 1fr);

        gap: 40px;

    }

    .gallery a img {
        width: 300px;

        height: 300px;
        object-fit: cover;

        border-radius: 5px;
    }

    @media screen and (max-width: 768px) {
        .container1 {
            margin: 15px 20px;
        }

        .gallery {
            grid-template-columns: repeat(2, 1fr);

        }

        .gallery a img {
            width: 100%;

            height: auto;
        }
    }
</style>
{{-- end css --}}
{{-- GALLERY --}}

<div class="container1">
    <div class="gallery">
        @foreach ($gallery as $galleries)
            <a href=" {{ $galleries['link_image'] }}" data-lightbox="models" data-title="{{ $galleries['title'] }}">
                <img src=" {{ $galleries['image'] }}" alt="{{ $galleries['alt'] }} ">
            </a>
        @endforeach



    </div>
</div>
{{-- END GALLERY --}}
{{-- js --}}
<script defer src="{{ url('lightbox/js/lightbox.js?v=' . env('CACHE_VERSION')) }}"></script>
<script defer src="{{ url('lightbox/js/lightbox-plus-jquery.js') }}"></script>
<!-- ------------------------------- -->
<script src="/light box gallery/js/lightbox-plus-jquery.js"></script>

{{-- end js --}}
