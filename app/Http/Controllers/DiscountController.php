<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function discount()
    {
            $viewData = [
           'meta_title'=> 'Discount Packages | Know Tour Buddy',
           'meta_desc'=> "Our goal at Tour Buddy is to create unforgettable travel experiences that fully express Nigeria's dynamic culture, breathtaking landscapes, and rich heritage.",
           'meta_image'=> url('pwa_assets/android-chrome-96x96.png'),
           'data_wf_page'=> '63bcff33c7e2f183f4024fa5',
        ];

        return view('discount', $viewData);
    }
}
