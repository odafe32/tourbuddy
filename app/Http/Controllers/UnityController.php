<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnityController extends Controller
{
    public function unitypark()
    {
            $viewData = [
           'meta_title'=> 'Our Destination | Know Tour Buddy',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '63bcff33c7e2f183f4024fa5',
        ];

        return view('destination_route/unitypark', $viewData);
    }
}
