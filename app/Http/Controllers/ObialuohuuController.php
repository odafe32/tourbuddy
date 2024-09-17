<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObialuohuuController extends Controller
{
    public function obialuohuu()
    {
        $viewData = [
           'meta_title'=> 'Our Destination | Tour Buddy',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '63b261b98057c82d96966625',
        ];

        return view('destination_route/obialuohuu', $viewData);
    }
}
