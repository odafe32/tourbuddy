  <?php
  $packages = [
      [
          'link' => 'destination_route/hill',
          'alt' => 'Ikirike Hill and Cliff Package',
          'image' => 'assets/images/Destination/image2.jpg',
          'title' => 'Ikirike Hill and Cliff Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'destination_route/hill',
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
  
      [
          'link' => 'destination_route/adadadam',
  
          'alt' => 'Adada Dam Package',
          'image' => 'assets/images/Destination/image4.jpg',
          'title' => 'Adada Dam Package',
          'days' => '4 Day 3 Night',
          'rating' => 5.0,
          'price' => 320,
          'package_url' => '',
      ],
      [
          'link' => 'destination_route/awhumwaterfall',
          'alt' => 'Awhum Waterfall Package',
          'image' => 'assets/images/Destination/image7.jpg',
          'title' => 'Awhum Waterfall Package',
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
          'link' => 'destination_route/obialuohuu',
          'alt' => 'Obialuohuu Waterfall Package',
          'image' => 'assets/images/Destination/image13.jpg',
          'title' => 'Obialuohuu Waterfall Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'tour-packages/france-tour-package.html',
      ],
      [
          'link' => 'destination_route/polomall',
          'alt' => ' Polo Mall Package',
          'image' => 'assets/images/Destination/image14.jpg',
          'title' => ' Polo Mall Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'tour-packages/france-tour-package.html',
      ],
      [
          'link' => 'destination_route/okpokuspring',
          'alt' => ' Okpoku Spring Package',
          'image' => 'assets/images/Destination/image15.jpg',
          'title' => ' Okpoku Spring Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'tour-packages/france-tour-package.html',
      ],
      [
          'link' => 'destination_route/orsuwaterfall',
          'alt' => ' Orsu Waterfall Package',
          'image' => 'assets/images/Destination/image16.jpg',
          'title' => ' Orsu Waterfall Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'tour-packages/france-tour-package.html',
      ],
      [
          'link' => 'destination_route/nikelake',
          'alt' => ' Nike Lake Package',
          'image' => 'assets/images/Destination/image17.jpg',
          'title' => ' Nike Lake Package',
          'days' => '8 Day 7 Night',
          'rating' => 4.8,
          'price' => 510,
          'package_url' => 'tour-packages/france-tour-package.html',
      ],
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
  ];
  
  ?>


  <div class="swiper-wrapper">
      @foreach ($packages as $package)
          <div class="swiper-slide">
              <div class="package-single-item bg-white shadow-lg rounded-lg p-4">
                  <a href="{{ url($package['link']) }}" class="package-link-block w-inline-block">
                      <img src="{{ url($package['image']) }}" alt="{{ $package['alt'] }}"
                          class="image-cover rounded-lg w-full h-48 object-cover" />
                  </a>
                  <div class="package-content mt-4">
                      <a href="{{ url($package['link']) }}"
                          class="package-title font-bold text-lg text-gray-800">{{ $package['title'] }}</a>
                      <div class="package-days-text text-sm text-gray-600">{{ $package['days'] }}
                      </div>
                      <div class="package-separator my-2"></div>
                      <div class="package-content-bottom flex justify-between items-center">
                          <div class="package-review-block flex items-center">
                              <img src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}" alt="Rating"
                                  class="w-5 h-5" />
                              <span class="ml-1">{{ $package['rating'] }}</span>
                          </div>
                          <div class="package-price text-orange font-bold">
                              <span class="text-sm">Start from $</span>{{ $package['price'] }}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
