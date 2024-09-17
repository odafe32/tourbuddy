    <?php
    $discount = [
        [
            'dlink' => 'bookings',
            'image' => url('assets/images/Destination/image13.jpg'),
            'discount' => '35% Off',
            'duration' => '4 Day 3 Night',
            'title' => 'Obialuohuu Waterfall',
            'alt' => 'Obialuohuu Waterfall',
            'location' => 'Obialuohuu Waterfall, Enugu',
            'discount_price' => '195',
            'original_price' => '245',
        ],
        [
            'dlink' => 'bookings',
            'image' => url('assets/images/Destination/image14.jpg'),
            'discount' => '25% Off',
            'duration' => '6 Day 5 Night',
            'title' => 'Polo Mall',
            'alt' => 'Polo Mall',
            'location' => 'Polo Mall, Enugu',
            'discount_price' => '165',
            'original_price' => '195',
        ],
    ];
    ?>


    <div role="list" class="discount-collection-list w-dyn-items">
        @foreach ($discount as $d)
            <div role="listitem" class="discount-item w-dyn-item">
                <div data-w-id="4d3f5aee-2865-19fd-8c20-892b9d2cf5bd" style="opacity:0" class="discount-single-item">
                    <a href="{{ $d['dlink'] }}" class="discount-image-link-block w-inline-block">
                        <img src="{{ $d['image'] }}" loading="lazy" alt="{{ $d['alt'] }}" class="image-cover" />
                        <div style="background-color:rgba(8,172,158,0.8)" class="discount-percentage-tag">
                            {{ $d['discount'] }}
                        </div>
                    </a>
                    <div class="discount-content">
                        <div class="discount-days">{{ $d['duration'] }}</div>
                        <a href="{{ $d['dlink'] }}" class="discount-title">{{ $d['title'] }}</a>
                        <div class="discount-location">
                            <img src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
                                loading="lazy" alt="{{ $d['alt'] }}" />
                            <div>{{ $d['location'] }}</div>
                        </div>
                        <div class="discount-content-bottom">
                            <div class="discount-price-block">
                                <div class="discount-price-text text-bold">
                                    <div>$</div>
                                    <div>{{ $d['discount_price'] }}</div>
                                </div>
                                <div class="discount-price-text text-strike-through">
                                    <div>$</div>
                                    <div>{{ $d['original_price'] }}</div>
                                </div>
                                <div>/person</div>
                            </div>
                            <a href="{{ url('bookings') }}" class="tiny-button secondary-outline-button w-button">
                                Book
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
