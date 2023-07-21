<?php

namespace App\Http\Controllers\Publics;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publics\ProductsModel;
use App\Models\Publics\HomeModel;
use Lang;

class HomeController extends Controller
{
//    public function index()
//    {
//        $productsModel = new ProductsModel();
//        $homeModel = new HomeModel();
//        $promoProducts = $productsModel->getProductsWithTag('promo');
//        $mostSelledProducts = $productsModel->getMostSelledProducts();
//        $carousel = $homeModel->getCarouselSliders();
//        return view('publics.home', [
//            'promoProducts' => $promoProducts,
//            'mostSelledProducts' => $mostSelledProducts,
//            'carousel' => $carousel,
//            'cartProducts' => $this->products,
//            'head_title' => Lang::get('seo.title_home'),
//            'head_description' => Lang::get('seo.descr_home')
//        ]);
//    }
    public function index()
    {
        $productModel = new ProductsModel();
        $products = $productModel->getMostSelledProducts();
        $cart_info = [];
        $cart_info = $this->products;
        return view('main.home', [
            'products' => $products,
            'cart_info' => $cart_info,
            'head_title' => Lang::get('seo.title_home'),
            'head_description' => Lang::get('seo.descr_home')
        ]);
    }

}
