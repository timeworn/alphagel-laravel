<?php

namespace App;

use App\Models\Publics\CheckoutModel;
use App\Models\Publics\OrdersModel;
use App\Models\Publics\ProductsModel;

/**
 * This class manage shopping cart of users
 *
 * @author kiro
 */
class Cart
{
    /*
     * 1 month expire time
     */

    private $cookieExpTime = 2678400;
    public $countProducts = 0;

    public function addProduct($data)
    {
        $checkoutModel = new CheckoutModel();
        if (!isset($_SESSION['laraCart'])) {
            $_SESSION['laraCart'] = array();
        }

        $arr_name = explode(" ", $data['name']);
        $f_name = $arr_name[0];
        $l_name = "";
        foreach($arr_name as $key => $value) {
            if($key == 0) continue;
            $l_name .= $value . " ";
        }
        $data['first_name'] = $f_name;
        $data['last_name'] = $l_name;
        $order_id = $checkoutModel->setFastOrder($data);
        $_SESSION['laraCart']['order_id'] = $order_id;
        $_SESSION['laraCart']['product_id'] = $data['product_id'];
        $_SESSION['laraCart']['first_name'] = $f_name;
        $_SESSION['laraCart']['last_name'] = $l_name;
        $_SESSION['laraCart']['email'] = $data['email'];
        setcookie('laraCart', serialize($_SESSION['laraCart']), $this->cookieExpTime);
    }

    public function removeProductQuantity($id)
    {
        if (($key = array_search($id, $_SESSION['laraCart'])) !== false) {
            unset($_SESSION['laraCart'][$key]);
        }
    }

    public function removeProduct($id)
    {
        $count = count(array_keys($_SESSION['laraCart'], $id));
        $i = 1;
        do {
            if (($key = array_search($id, $_SESSION['laraCart'])) !== false) {
                unset($_SESSION['laraCart'][$key]);
            }
            $i++;
        } while ($i <= $count);
        setcookie('laraCart', serialize($_SESSION['laraCart']), $this->cookieExpTime);
    }

    public function clearCart()
    {
        unset($_SESSION['laraCart']);
        setcookie('laraCart', null, -1, '/');
    }

    private function getCartInfo()
    {
        $products = array();
        if (!isset($_SESSION['laraCart']) || empty($_SESSION['laraCart'])) {
            if (isset($_COOKIE['laraCart']) && $_COOKIE['laraCart'] == null && !empty($_COOKIE['laraCart'])) {
                $_SESSION['laraCart'] = unserialize($_COOKIE['laraCart']);
            }
        } else {
            $products = $_SESSION['laraCart'];
        }
        return $products;
    }

    public function getCartProducts()
    {

        $productsModel = new ProductsModel();
        $orderModel = new OrdersModel();
        $product_order = array();

        $cart_info = $this->getCartInfo();

        if(!empty($cart_info)) {
            $order_info = $orderModel->getOrder($cart_info['order_id']);
            $product_info = $productsModel->getProduct($cart_info['product_id']);

            $product_order['cart_info'] =  $cart_info;
            $product_order['cart_order'] =  $order_info;
            $product_order['cart_product'] =  $product_info;
        }

       return $product_order;
    }

    public function getCartHtmlWithProducts()
    {
        $products = $this->getCartProducts();

        $sum = 0;
        if (!empty($products)) {
            $sum = 0;
            ob_start();
            include '../resources/views/publics/cartHtml.php';
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        } else {
            return $products;
        }
    }

    public function getCartHtmlWithProductsForCheckoutPage()
    {
        $products = $this->getCartProducts();

        $sum = 0;
        if (!empty($products)) {
            $sum = 0;
            ob_start();
            include '../resources/views/publics/cartHtmlForCheckoutPage.php';
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        } else {
            return $products;
        }
    }

}
