<?php

namespace App\Http\Controllers\Publics;

use App\Models\Publics\ProductsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lang;
use App\Cart;
/*
 * Used most of all for ajax requests
 */

class CartController extends Controller
{

    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function addProduct(Request $request)
    {
        $post = $request->all();
        $this->cart->addProduct($post);
        $productModel = new ProductsModel();
        $all_products = $productModel->getMostSelledProducts();
        return view('main.checkout', [
            'products' => $all_products,
            'cart_info' => $this->products,
            'head_title' => Lang::get('seo.title_checkout'),
            'head_description' => Lang::get('soe.descr_checkout')
        ]);
    }

    public function renderCartProductsWithHtml(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        echo json_encode(array(
            'html' => $this->cart->getCartHtmlWithProducts(),
            'num_products' => $this->cart->countProducts
        ));
    }

    public function removeProductQuantity(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        $post = $request->all();
        $this->cart->removeProductQuantity($post['id']);
    }

    public function getProductsForCheckoutPage(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        echo $this->cart->getCartHtmlWithProductsForCheckoutPage();
    }

    public function removeProduct(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        $post = $request->all();
        $this->cart->removeProduct($post['id']);
    }

}
