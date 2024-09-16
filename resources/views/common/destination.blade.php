{{-- start  --}}

<?php

$destinations = [
    [
        'link' => '/',
        'title' => 'Ikirike Hill and Cliff',
        'image' => url('assets/images/Destination/image2.jpg'),
        'rating' => 4.8,
        'location' => 'Ikirike Hill and Cliff, Enugu ',
        'price' => 110,
    ],
    [
        'link' => '/',
        'title' => 'Unity Park ',
        'image' => url('assets/images/Destination/image5.jpg'),
        'rating' => 4.8,
        'location' => 'Unity Park, Enugu',
        'price' => 170,
    ],
    [
        'link' => '/',
        'title' => ' Adada Dam',
        'image' => url('assets/images/Destination/image4.jpg'),
        'rating' => 4.6,
        'location' => ' Adada Dam, Enugu',
        'price' => 210,
    ],
    [
        'link' => '/',
        'title' => 'Awhum Waterfall',
        'image' => url('assets/images/Destination/image7.jpg'),
        'rating' => 4.8,
        'location' => 'Awhum Waterfall, Enugu',
        'price' => 110,
    ],
];

// return view('home', compact('destinations'));

// packages

// end packages

?>
<div class="destination-block margin-top-35">
    <div class="destination-list-wrapper w-dyn-list">
        <div role="list" class="destination-list w-dyn-items">
            @foreach ($destinations as $destination)
                <div role="listitem" class="destination-item w-dyn-item">
                    <div data-w-id="043e5690-3e97-71a2-1284-e04494be20e2" style="opacity:0"
                        class="destination-single-item">
                        <a href="{{ $destination['link'] }}" class="destination-image-link-block w-inline-block">
                            <img src="{{ $destination['image'] }}" loading="lazy" alt="{{ $destination['title'] }}"
                                class="image-cover" />
                        </a>
                        <div class="destination-top">
                            <a style="color:rgb(31,51,71)" href="{{ url('destinations') }}"
                                class="destination-title">{{ $destination['title'] }}</a>
                            <div class="review-block">
                                <img src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
                                    loading="lazy" alt="Rating" />
                                <div class="review-text">{{ $destination['rating'] }}</div>
                            </div>
                        </div>
                        <div class="location-block">
                            <img src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
                                loading="lazy" alt="Location Gray" />
                            <div class="text-block">{{ $destination['location'] }}</div>
                        </div>
                        <div class="destination-bottom">
                            <div class="price-block">
                                <div>$</div>
                                <div>{{ $destination['price'] }}</div>
                                <div>/</div>
                                <div class="price-small-text">person</div>
                            </div>
                            <a href="{{ url('book-now') }}" class="tiny-button button w-button">Book</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- end --}}
