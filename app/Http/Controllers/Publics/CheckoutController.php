<?php

namespace App\Http\Controllers\Publics;

use App\Models\Admin\CountryModel;
use App\Models\Admin\SettingModel;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publics\CheckoutModel;
use App\Models\Publics\ProductsModel;
use Lang;
use App\Cart;
use IP2LocationLaravel;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $productModel = new ProductsModel();
        $all_products = $productModel->getMostSelledProducts('desc');
        $cart_info = [];
        $cart_info = $this->products;

        $records = IP2LocationLaravel::get($request->ip(), 'bin');
        $countryCode = $records['countryCode'];
        $settingModel = new SettingModel();
        $settingItem = $settingModel::first();
        $defaultCountryCode = $settingItem->country_code;
        $countryModel = new CountryModel();
        $countries = $countryModel::all();

        return view('main.checkout', [
            'products' => $all_products,
            'cart_info' => $cart_info,
            'countries' => $countries,
            'country_code' => $countryCode,
            'default_country_code' => $defaultCountryCode,
            'head_title' => Lang::get('seo.title_checkout'),
            'head_description' => Lang::get('soe.descr_checkout')
        ]);
    }
    public function checkOut(Request $request)
    {
        $records = IP2LocationLaravel::get($request->ip(), 'bin');
        $countryCode = $records['countryCode'];
        $settingModel = new SettingModel();
        $settingItem = $settingModel::first();
        $defaultCountryCode = $settingItem->country_code;
        $countryModel = new CountryModel();
        $countries = $countryModel::all();

        $cart_info = [];
        $cart = new Cart();
        $cart_info = $this->products;
        if(!empty($cart_info)){
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'g-recaptcha-response' => 'required|captcha',
            ]);
        }else {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
            ]);
        }

        $post = $request->all();
        $productModel = new ProductsModel();
        $all_products = $productModel->getMostSelledProducts('desc');

        if( !empty($post) ) {
            $cart->addProduct($post);
            $cart_info = $cart->getCartProducts();
        }

        return view('main.checkout', [
            'products' => $all_products,
            'cart_info' => $cart_info,
            'countries' => $countries,
            'country_code' => $countryCode,
            'default_country_code' => $defaultCountryCode,
            'head_title' => Lang::get('seo.title_checkout'),
            'head_description' => Lang::get('soe.descr_checkout')
        ]);
    }
    public function complete(Request $request)
    {
        $post = $request->all();
        $checkoutModel = new CheckoutModel();
        $checkoutModel->setOrder($post);
        $cart = new Cart();
        $cart->clearCart();
        return redirect(lang_url('/'))->with(['msg' => Lang::get('public_pages.order_accepted'), 'result' => true]);
    }

    public function setOrder(Request $request)
    {
        $post = $request->all();
        $checkoutModel = new CheckoutModel();
        $checkoutModel->setOrder($post);
        $cart = new Cart();
        $cart->clearCart();
        return redirect(lang_url('/'))->with(['msg' => Lang::get('public_pages.order_accepted'), 'result' => true]);
    }

    public function setFastOrder(Request $request)
    {
        $post = $request->all();
        $checkoutModel = new CheckoutModel();
        $checkoutModel->setFastOrder($post);
        return redirect(lang_url('/'))->with(['msg' => Lang::get('public_pages.order_accepted'), 'result' => true]);
    }

}
