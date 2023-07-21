<?php

namespace App\Http\Controllers\Publics;

use App\Http\Controllers\Controller;
use App\Models\Admin\SeoModel;
use App\Models\Admin\SettingModel;
use App\Models\Publics\ProductsModel;
use Lang;
use Illuminate\Http\Request;
use IP2LocationLaravel;

class GenericController extends Controller
{
    public function index()
    {
        $productModel = new ProductsModel();
        $products = $productModel->getMostSelledProducts();
        return view('main.home', [
            'products' => $products,
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home')
        ]);
    }

    public function forseo(Request $request)
    {
        $records = IP2LocationLaravel::get($request->ip(), 'bin');
        $countryCode = $records['countryCode'];


        $settingModel = new SettingModel();
        $settingItem = $settingModel::first();
        $defaultCountryCode = $settingItem->country_code;

        $seoItems = null;
        $seoModel = new SeoModel();
        if(!empty($countryCode) && $countryCode !== '-') {
            $seoItems = $seoModel::where('country_code', $countryCode)->first();
        }else if(!empty($defaultCountryCode)) {
            $seoItems = $seoModel::where('country_code', $defaultCountryCode)->first();
        }else {
            $seoItems = $seoModel::where('country_code', 'EN')->first();
        }
        if(empty($seoItems)) {
            $seoItems = $seoModel::where('country_code', 'EN')->first();
        }
        
        return view('main.forseo', [
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home'),
            'seo_content' => $seoItems
        ]);
    }

    public function sepa()
    {
        return view('main.sepa', [
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home')
        ]);
    }

    public function terms()
    {
        return view('main.terms', [
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home')
        ]);
    }

}
