{{-- <link rel="stylesheet" href="/light box gallery/css/lightbox.css"> --}}
<link rel="stylesheet" href="{{ url('lightbox/css/lightbox.css?v=' . env('CACHE_VERSION')) }}">
<link rel="stylesheet" href="{{ url('lightbox/css/lightbox.min.css') }}">
{{-- <link rel="stylesheet" href="/light box gallery/style.css"> --}}
{{-- csss --}}
{{-- array --}}
<?php
$gallery = [
    [
        'link_image' => 'assets/images/Destination/image18.jpg',
        'image' => 'assets/images/Destination/image18.jpg',
        'alt' => 'National Museum of Unity',
        'title' => 'National Museum of Unity',
    ],
    [
        'link_image' => 'assets/images/Destination/image2.jpg',
        'image' => 'assets/images/Destination/image2.jpg',
        'alt' => 'Ikirike Hill and Cliff',
        'title' => 'Ikirike Hill and Cliff',
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
    [
        'link_image' => 'assets/images/Destination/image8.jpg',
        'image' => 'assets/images/Destination/image8.jpg',
        'alt' => 'Akwuke Beach',
        'title' => 'Akwuke Beach',
    ],
    [
        'link_image' => 'assets/images/Destination/image9.jpg',
        'image' => 'assets/images/Destination/image9.jpg',
        'alt' => 'Michael Okpara Square',
        'title' => 'Michael Okpara Square',
    ],
    [
        'link_image' => 'assets/images/Destination/image10.jpg',
        'image' => 'assets/images/Destination/image10.jpg',
        'alt' => 'Ngwo Pine Forest',
        'title' => 'Ngwo Pine Forest',
    ],
    [
        'link_image' => 'assets/images/Destination/image11.jpg',
        'image' => 'assets/images/Destination/image11.jpg',
        'alt' => 'Milliken Hill',
        'title' => 'Milliken Hill',
    ],
    [
        'link_image' => 'assets/images/Destination/image12.jpg',
        'image' => 'assets/images/Destination/image12.jpg',
        'alt' => 'Oji Alum',
        'title' => 'Oji Alum',
    ],
    [
        'link_image' => 'assets/images/Destination/image13.jpg',
        'image' => 'assets/images/Destination/image13.jpg',
        'alt' => 'Obialuohuu Waterfall',
        'title' => 'Obialuohuu Waterfall',
    ],
    [
        'link_image' => 'assets/images/Destination/image14.jpg',
        'image' => 'assets/images/Destination/image14.jpg',
        'alt' => 'Polo Mall',
        'title' => 'Polo Mall',
    ],
    [
        'link_image' => 'assets/images/Destination/image15.jpg',
        'image' => 'assets/images/Destination/image15.jpg',
        'alt' => 'Okpoku Spring',
        'title' => 'Okpoku Spring',
    ],
    [
        'link_image' => 'assets/images/Destination/image16.jpg',
        'image' => 'assets/images/Destination/image16.jpg',
        'alt' => 'Orsu Waterfall',
        'title' => 'Orsu Waterfall',
    ],
    [
        'link_image' => 'assets/images/Destination/image17.jpg',
        'image' => 'assets/images/Destination/image17.jpg',
        'alt' => 'Nike Lake',
        'title' => 'Nike Lake',
    ],
    [
        'link_image' => 'assets/images/Destination/image5.jpg',
        'image' => 'assets/images/Destination/image5.jpg',
        'alt' => 'Unity Park',
        'title' => 'Unity Park',
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
        transition: 0.3s ease-in
    }


    .gallery a img:hover {
        transform: scale(0.90);
        /* Zoom out the image */
    }


    .gallery a .title {
        display: none;
        /* Hidden by default */
        position: absolute;
        bottom: 10px;
        left: 10px;
        padding: 5px 10px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        border-radius: 5px;
        font-size: 14px;
    }

    .gallery a:hover .title {
        display: block;
        /* Show title on hover */
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

    @media screen and (max-width:450px) {
        .gallery {
            grid-template-columns: repeat(2, 1fr);

        }

    }

    @media screen and (max-width:350px) {
        .gallery {
            grid-template-columns: repeat(1, 1fr);

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
