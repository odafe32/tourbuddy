    <?php
    $testimonies = [
        [
            'reviews' => 'Lorem ipsum dolor sit amet consectetur...',
            'name' => 'Emma Odama',
            'location' => 'Nigeria',
        ],
        [
            'reviews' => ' tour Buddy is one of the most popular Travel agency for those who want to explore the wold and try to make adventure as well as we can provide',
            'name' => 'Jhon Smith',
            'location' => 'Singapore',
        ],
    ];
    
    ?>

    <div class="testimonial-mask w-slider-mask">
        @foreach ($testimonies as $tes)
            <div class="testimonial-slide w-slide">
                <div class="testimonial-single-slide-item">
                    <p data-w-id="78c29dd5-2414-6cfb-c0e2-04a0bd9924b4" style="opacity:0" class="testimonial-text">
                        {{ $tes['reviews'] }} </p>
                    <div data-w-id="7914782b-c59c-8369-2de4-73851276aafa" style="opacity:0" class="testimonial-user-name">
                        {{ $tes['name'] }} </div>
                    <div data-w-id="f0eb9419-0e36-d702-75a3-b9da4f63eb43" style="opacity:0"
                        class="testimonial-user-info">{{ $tes['location'] }} </div>
                </div>
            </div>
        @endforeach
    </div>
