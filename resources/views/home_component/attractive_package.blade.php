<?php
$packages = [
    [
        'link' => 'destination_route/nationalmuseum',
        'alt' => ' National Museum of Unity Package',
        'image' => 'assets/images/Destination/image18.jpg',
        'title' => ' National Museum of Unity Package',
        'days' => '8 Day 7 Night',
        'rating' => 4.8,
        'price' => 510,
        'package_url' => 'tour-packages/france-tour-package.html',
    ],
    [
        'image' => 'assets/images/Destination/image6.jpg',
        'alt' => ' Iyi Nzu Waterfall Package',
        'title' => ' Iyi Nzu Waterfall Package',
        'days' => '5 Day 4 Night',
        'rating' => 4.8,
        'price' => 110,
        'link' => 'destination_route/iyinzu',
    ],
    [
        'link' => 'destination_route/michaelokpara',
        'alt' => 'Michael Okpara Square Package',
        'image' => 'assets/images/Destination/image9.jpg',
        'title' => 'Michael Okpara Square Package',
        'days' => '4 Day 3 Night',
        'rating' => 5.0,
        'price' => 320,
        'package_url' => '/',
    ],
    [
        'link' => 'destination_route/akwukebeach',
        'alt' => 'Akwuke Beach Package',
        'image' => 'assets/images/Destination/image8.jpg',
        'title' => 'Akwuke Beach Package',
        'days' => '8 Day 7 Night',
        'rating' => 4.8,
        'price' => 320,
        'package_url' => '',
    ],
    [
        'link' => 'destination_route/ojialum',
        'alt' => 'Oji Alum Package',
        'image' => 'assets/images/Destination/image12.jpg',
        'title' => '. Oji Alum Package',
        'days' => '5 Day 4 Night ',
        'rating' => 4.8,
        'price' => 110,
        'package_url' => '',
    ],
    [
        'link' => 'destination_route/ngwopine',

        'alt' => 'Ngwo Pine Forest Package',
        'image' => 'assets/images/Destination/image10.jpg',
        'title' => 'Ngwo Pine Forest Package',
        'days' => '4 Day 3 Night',
        'rating' => 5.0,
        'price' => 320,
        'package_url' => '',
    ],
    [
        'link' => 'destination_route/millikenhill',
        'alt' => 'Milliken Hill Package',
        'image' => 'assets/images/Destination/image11.jpg',
        'title' => 'Milliken Hill Package',
        'days' => '8 Day 7 Night',
        'rating' => 4.8,
        'price' => 510,
        'package_url' => 'tour-packages/france-tour-package.html',
    ],

    [
        'link' => 'destination_route/unitypark',

        'alt' => 'Unity Park Package',
        'image' => 'assets/images/Destination/image5.jpg',
        'title' => 'Unity Park Package',
        'days' => '4 Day 3 Night',
        'rating' => 5.0,
        'price' => 320,
        'package_url' => '',
    ],
];

?>




@foreach ($packages as $package)
    <div class="package-single-slider w-slide">
        <div class="package-list-wrapper w-dyn-list">
            <div role="list" class="package-list-slider w-dyn-items">
                <div role="listitem" class="package-item w-dyn-item">
                    <div data-w-id="af83a328-d9af-a8c4-75ba-dcd853ca476f" style="opacity:1" class="package-single-item">
                        <a href="{{ url($package['link']) }}" class="package-link-block w-inline-block"> <img
                                src="{{ url($package['image']) }}" loading="lazy" alt="{{ $package['alt'] }}"
                                class="image-cover" /></a>
                        <div class="package-content"> <a href="{{ url($package['link']) }}"
                                class="package-title">{{ $package['title'] }}</a>
                            <div class="package-days-text">{{ $package['days'] }}</div>
                            <div class="package-separator"></div>
                            <div class="package-content-bottom">
                                <div class="package-review-block"> <img
                                        src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
                                        loading="lazy" alt="Rating" />
                                    <div>{{ $package['rating'] }}</div>
                                </div>
                                <div class="package-price">
                                    <div>Start from <span class="text-orange">$</span>
                                    </div>
                                    <div class="text-orange">{{ $package['price'] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
