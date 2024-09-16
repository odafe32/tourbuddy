<?php

namespace App\Http\Controllers;

use View;
use DateTime;
use stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // parent::__construct();
    }

    /**
     * Show the application Login.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = [
           'meta_title'=> 'Tour Buddy - Where Wanderlust Meets Adventure & Unforgettable Experiences Await!',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '63b261b98057c82d96966625',
        ];

        return view('home', $viewData);
    }


    public function about_us()
    {
        $viewData = [
           'meta_title'=> 'About Us | Know Tour Buddy',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '63bcff33c7e2f183f4024fa5',
        ];

        return view('about_us', $viewData);
    }

    public function faqs()
    {
        $viewData = [
           'meta_title'=> 'FAQs | Tour Buddy',
           'meta_desc'=> 'Inspired by Compassion. Find frequently asked questions about our foundation.',
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '5f14d7811a66620c595e3332',
        ];

        return view('faqs', $viewData);
    }


    public function impact_gallery()
    {

        if (env('APP_ENV') == 'local') {
            $dirs = array_slice(scandir(storage_path('app\public\gallery')), 2);
        } else {
            $dirs = array_slice(scandir(storage_path('app/public/gallery')), 2);
        }

        // dd($dirs);

        $viewData = [
           'meta_title'=> 'Our Impact Gallery | Tour Buddy',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '5f14d7811a6662e4755e332f',
           'dirs'=> $dirs,
        ];

        return view('impact_gallery', $viewData);
    }


    public function contact_us()
    {
        $viewData = [
           'meta_title'=> 'Contact Us | Tour Buddy',
           'meta_desc'=> 'Inspired by Compassion. You can join hands with us for more impact.',
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '5f14d7811a6662225c5e3331',
        ];

        return view('contact_us', $viewData);
    }

    public function process_contact(Request $request)
    {

        if ($_POST) {
            // return $_POST;
            $name = $request->name;
            $email = $request->email;
            $message = $request->message;

            $validationData['name'] = 'required';
            $validationData['email'] = 'required|email';
            $validationData['message'] = 'required';

            $validator = Validator::make($request->all(), $validationData);

            if (!$validator->passes()) {
                return response()->json(['error'=>$validator->errors()->all()]);
            }

            $data = [
                'name'=> $name,
                'email'=> $email,
                'message'=> $message,
            ];

            // return $data;      <div class="destination-section wf-section">
        //     <div class="section-gap-bottom">
        //         <div class="container w-container">
        //             <div class="section-wrapper section-flex section-justify-between">
        //                 <div class="section-block max-width-348">
        //                     <div data-w-id="31b47d96-ed01-173f-cfc2-495fbb2912d9" style="opacity:0"
        //                         class="section-tag-block">
        //                         <div class="hero-tag">Most Attractive</div><img
        //                             src="{{ url('assets/images/1/63ba488de91f66f2c230d9d1_location.png') }}"
        //                             loading="lazy" alt="Location Icon" />
        //                     </div>
        //                     <h1 data-w-id="7b0395cf-f6b6-3deb-8523-2d9165ecdd66" style="opacity:0" class="section-title">
        //                         Popular <span class="text-orange">Destination </span>we offer for all</h1>
        //                 </div>
        //                 <div class="section-style-text-block">
        //                     <div data-w-id="6fcebd83-1bd0-5d75-5da8-855a6248a2e6" style="opacity:0"
        //                         class="section-style-text-header"><span class="text-green">50+</span> Destinations</div>
        //                     <p data-w-id="7a7b312b-f26b-92c9-640b-1c35a064dbc2" style="opacity:0"
        //                         class="section-style-paragraph">We are known for our unique and immersive experiences,
        //                         outstanding customer service, and unwavering dedication to authenticity and sustainability.
        //                     </p>
        //                 </div>
        //             </div>
        //             <div class="destination-block margin-top-35">
        //                 <div class="destination-list-wrapper w-dyn-list">
        //                     <div role="list" class="destination-list w-dyn-items">
        //                         <div role="listitem" class="destination-item w-dyn-item">
        //                             <div data-w-id="043e5690-3e97-71a2-1284-e04494be20e2" style="opacity:0"
        //                                 class="destination-single-item">
        //                                 <a href="{{ url('destinations') }}"
        //                                     class="destination-image-link-block w-inline-block"><img
        //                                         src="{{ url('assets/images/1/63b51b6bd3a552cfc5d6e6fb_destination-1.jpg') }}"
        //                                         loading="lazy" alt="Maldives" class="image-cover" /></a>
        //                                 <div class="destination-top"><a style="color:rgb(31,51,71)"
        //                                         href="{{ url('destinations') }}" class="destination-title">Maldives</a>
        //                                     <div class="review-block"><img
        //                                             src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
        //                                             loading="lazy" alt="Rating" />
        //                                         <div class="review-text">4.8</div>
        //                                     </div>
        //                                 </div>
        //                                 <div class="location-block"><img
        //                                         src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
        //                                         loading="lazy" alt="Location Gray" />
        //                                     <div class="text-block">Nuda Penida, Maldives</div>
        //                                 </div>
        //                                 <div class="destination-bottom">
        //                                     <div class="price-block">
        //                                         <div>$</div>
        //                                         <div>110</div>
        //                                         <div>/</div>
        //                                         <div class="price-small-text">person</div>
        //                                     </div><a href="{{ url('book-now') }}"
        //                                         class="tiny-button button w-button">Book</a>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                         <div role="listitem" class="destination-item w-dyn-item">
        //                             <div data-w-id="043e5690-3e97-71a2-1284-e04494be20e2" style="opacity:0"
        //                                 class="destination-single-item">
        //                                 <a href="{{ url('destinations') }}"
        //                                     class="destination-image-link-block w-inline-block"><img
        //                                         src="{{ url('assets/images/1/63b539ccf645d10c29a1c32c_destination-2.jpg') }}"
        //                                         loading="lazy" alt="UAE" class="image-cover" /></a>
        //                                 <div class="destination-top"><a style="color:rgb(31,51,71)"
        //                                         href="{{ url('destinations') }}" class="destination-title">UAE</a>
        //                                     <div class="review-block"><img
        //                                             src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
        //                                             loading="lazy" alt="Rating" />
        //                                         <div class="review-text">4.8</div>
        //                                     </div>
        //                                 </div>
        //                                 <div class="location-block"><img
        //                                         src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
        //                                         loading="lazy" alt="Location Gray" />
        //                                     <div class="text-block">Dubai desert, UAE</div>
        //                                 </div>
        //                                 <div class="destination-bottom">
        //                                     <div class="price-block">
        //                                         <div>$</div>
        //                                         <div>170</div>
        //                                         <div>/</div>
        //                                         <div class="price-small-text">person</div>
        //                                     </div><a href="{{ url('book-now') }}"
        //                                         class="tiny-button button w-button">Book</a>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                         <div role="listitem" class="destination-item w-dyn-item">
        //                             <div data-w-id="043e5690-3e97-71a2-1284-e04494be20e2" style="opacity:0"
        //                                 class="destination-single-item">
        //                                 <a href="{{ url('destinations') }}"
        //                                     class="destination-image-link-block w-inline-block"><img
        //                                         src="{{ url('assets/images/1/63b53b74fcbe5221f33d8887_destination-3.jpg') }}"
        //                                         loading="lazy" alt="Italy" class="image-cover" /></a>
        //                                 <div class="destination-top"><a style="color:rgb(31,51,71)"
        //                                         href="{{ url('destinations') }}" class="destination-title">Italy</a>
        //                                     <div class="review-block"><img
        //                                             src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
        //                                             loading="lazy" alt="Rating" />
        //                                         <div class="review-text">4.6</div>
        //                                     </div>
        //                                 </div>
        //                                 <div class="location-block"><img
        //                                         src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
        //                                         loading="lazy" alt="Location Gray" />
        //                                     <div class="text-block">Venice, Italy</div>
        //                                 </div>
        //                                 <div class="destination-bottom">
        //                                     <div class="price-block">
        //                                         <div>$</div>
        //                                         <div>210</div>
        //                                         <div>/</div>
        //                                         <div class="price-small-text">person</div>
        //                                     </div><a href="{{ url('book-now') }}"
        //                                         class="tiny-button button w-button">Book</a>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                         <div role="listitem" class="destination-item w-dyn-item">
        //                             <div data-w-id="043e5690-3e97-71a2-1284-e04494be20e2" style="opacity:0"
        //                                 class="destination-single-item">
        //                                 <a href="{{ url('destinations') }}"
        //                                     class="destination-image-link-block w-inline-block"><img
        //                                         src="{{ url('assets/images/1/63b53b8aef596091f93f9d55_destination-4.jpg') }}"
        //                                         loading="lazy" alt="Greece" class="image-cover" /></a>
        //                                 <div class="destination-top"><a style="color:rgb(31,51,71)"
        //                                         href="{{ url('destinations') }}" class="destination-title">Greece</a>
        //                                     <div class="review-block"><img
        //                                             src="{{ url('assets/images/1/63b54936077974bdd70c95bc_rating.svg') }}"
        //                                             loading="lazy" alt="Rating" />
        //                                         <div class="review-text">4.8</div>
        //                                     </div>
        //                                 </div>
        //                                 <div class="location-block"><img
        //                                         src="{{ url('assets/images/1/63b54a9111e7163d1d9195a4_location-gray.svg') }}"
        //                                         loading="lazy" alt="Location Gray" />
        //                                     <div class="text-block">Santorini, Greece</div>
        //                                 </div>
        //                                 <div class="destination-bottom">
        //                                     <div class="price-block">
        //                                         <div>$</div>
        //                                         <div>110</div>
        //                                         <div>/</div>
        //                                         <div class="price-small-text">person</div>
        //                                     </div><a href="{{ url('book-now') }}"
        //                                         class="tiny-button button w-button">Book</a>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        // </div>


    
            $name = 'noreply - Tour Buddy';
            $email = 'noreply@tourbuddyng.com';

            $data2 = array('data' => $data);

            Mail::send('email.mail_contact', $data2, function($message) use ($data, $email, $name) {
                $message->to('contact@tourbuddyng.com', 'Enquiry Desk - Tour Buddy')->subject('New Contact Msg: '.$data['name']);
                $message->from($email, $name);
            });


            return 'success';
        }
        return "Server error";
    }

    

    //destination controller
    //destination controller
        // end controller

// In HomeController.php


}
