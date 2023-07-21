<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

/* Public Routes */
// home page
Route::get('/', 'Publics\\HomeController@index');
Route::get('{locale}', 'Publics\\HomeController@index')
        ->where('locale', implode('|', Config::get('app.locales')));

// open one product
Route::get('{any}-{id}', 'Publics\\ProductsController@productPreview')->where('id', '[\d+]+')->where('any', '(.*)');
Route::get('{locale}/{any}-{id}', 'Publics\\ProductsController@productPreview')
        ->where('locale', implode('|', Config::get('app.locales')))->where('id', '[\d+]+')->where('any', '(.*)');

// open all products
Route::get('products', 'Publics\\ProductsController@index');
Route::get('{locale}/products', 'Publics\\ProductsController@index')
        ->where('locale', implode('|', Config::get('app.locales')));

// open all products with categorie
Route::get('category/{category}', 'Publics\\ProductsController@index')->where('category', '(.*)');
Route::get('{locale}/category/{category}', 'Publics\\ProductsController@index')
        ->where('locale', implode('|', Config::get('app.locales')))->where('category', '(.*)');


// checkout please
Route::get('checkout', 'Publics\\CheckoutController@index')->middleware(['checkout']);
Route::get('{locale}/checkout', 'Publics\\CheckoutController@index')
        ->where('locale', implode('|', Config::get('app.locales')))->middleware(['checkout']);

// checkout post req
Route::post('checkout', 'Publics\\CheckoutController@checkOut');
Route::post('{locale}/checkout', 'Publics\\CheckoutController@checkOut')
        ->where('locale', implode('|', Config::get('app.locales')));

Route::post('complete', 'Publics\\CheckoutController@complete');
Route::post('{locale}/complete', 'Publics\\CheckoutController@complete')
    ->where('locale', implode('|', Config::get('app.locales')));

// open contacts
Route::get('contacts', 'Publics\\ContactsController@index');
Route::get('{locale}/contacts', 'Publics\\ContactsController@index')
        ->where('locale', implode('|', Config::get('app.locales')));

// send message from contacts
Route::post('contacts', 'Publics\\ContactsController@sendMessage');
Route::post('{locale}/contacts', 'Publics\\ContactsController@sendMessage')
        ->where('locale', implode('|', Config::get('app.locales')));

// save fast order
Route::post('fast-order', 'Publics\\CheckoutController@setFastOrder');
Route::post('{locale}/fast-order', 'Publics\\CheckoutController@setFastOrder')
        ->where('locale', implode('|', Config::get('app.locales')));

// add product to cart from add button (ajax)
Route::post('addProduct', 'Publics\\CartController@addProduct');
// get products and cart html
Route::post('getGartProducts', 'Publics\\CartController@renderCartProductsWithHtml');
// get products and cart html
Route::post('removeProductQuantity', 'Publics\\CartController@removeProductQuantity');
// get products and cart html for checkout page
Route::post('getProductsForCheckoutPage', 'Publics\\CartController@getProductsForCheckoutPage');
// remove product from cart
Route::post('removeProduct', 'Publics\\CartController@removeProduct');

Route::get('for_seo', 'Publics\\GenericController@forseo');
Route::get('{locale}/for_seo', 'Publics\\GenericController@forseo')
    ->where('locale', implode('|', Config::get('app.locales')));

Route::get('sepa', 'Publics\\GenericController@sepa');
Route::get('{locale}/sepa', 'Publics\\GenericController@sepa')
    ->where('locale', implode('|', Config::get('app.locales')));

Route::get('terms', 'Publics\\GenericController@terms');
Route::get('{locale}/terms', 'Publics\\GenericController@terms')
    ->where('locale', implode('|', Config::get('app.locales')));

/* Administration Routes */
Route::middleware(['auth'])->group(function () { // check for autherization
    Route::get('admin', 'Admin\\DashboardController@index');
    Route::get('{locale}/admin', 'Admin\\DashboardController@index')
            ->where('locale', implode('|', Config::get('app.locales')));

///////////////
    Route::get('admin/seo', 'Admin\\SeoController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/seo', 'Admin\\SeoController@index');
///////////////
    Route::get('admin/create/seo', 'Admin\\SeoController@create')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/create/seo', 'Admin\\SeoController@create');
////////////////
    Route::get('admin/edit/seo/{number}', 'Admin\\SeoController@create')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/edit/seo/{number}', 'Admin\\SeoController@create');
////////////////
    Route::get('admin/delete/seo/{itemId}', 'Admin\\SeoController@delete')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/delete/seo/{itemId}', 'Admin\\SeoController@delete');

    Route::post('admin/create/seo', 'Admin\\SeoController@save')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/create/seo', 'Admin\\SeoController@save');

    Route::post('admin/edit/seo/{number}', 'Admin\\SeoController@save')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/edit/seo/{number}', 'Admin\\SeoController@save');
//////////////
    Route::get('admin/publish', 'Admin\\PublishController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/publish', 'Admin\\PublishController@index');
//////////////
    Route::get('admin/edit/pruduct/{number}', 'Admin\\PublishController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/edit/pruduct/{number}', 'Admin\\PublishController@index');
//////////////
    Route::post('admin/publish', 'Admin\\PublishController@setProduct')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/publish', 'Admin\\PublishController@setProduct');
//////////////
    Route::post('admin/edit/pruduct/{number}', 'Admin\\PublishController@setProduct')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/edit/pruduct/{number}', 'Admin\\PublishController@setProduct');
//////////////
    Route::get('admin/products', 'Admin\\ProductsController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/products', 'Admin\\ProductsController@index');
//////////////
    Route::get('admin/categories', 'Admin\\ProductsCategoryController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/categories', 'Admin\\ProductsCategoryController@index');
//////////////
    Route::post('admin/categories', 'Admin\\ProductsCategoryController@setCategory')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/categories', 'Admin\\ProductsCategoryController@setCategory');
//////////////
    Route::post('admin/categories/{number}', 'Admin\\ProductsCategoryController@setCategory')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/categories/{number}', 'Admin\\ProductsCategoryController@setCategory');
//////////////
    Route::get('admin/delete/product/{number}', 'Admin\\ProductsController@deleteProduct')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/delete/product/{number}', 'Admin\\ProductsController@deleteProduct');
//////////////
    Route::get('admin/delete/categories', 'Admin\\ProductsCategoryController@deleteCategories')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/delete/categories', 'Admin\\ProductsCategoryController@deleteCategories');
//////////////
    Route::get('admin/users', 'Admin\\UsersController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/users', 'Admin\\UsersController@index');
//////////////
    Route::post('admin/users', 'Admin\\UsersController@setUser')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/users', 'Admin\\UsersController@setUser');
//////////////
    Route::get('admin/carousel', 'Admin\\CarouselController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/carousel', 'Admin\\CarouselController@index');
//////////////
    Route::post('admin/carousel', 'Admin\\CarouselController@setSlider')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/carousel', 'Admin\\CarouselController@setSlider');
//////////////
    Route::get('admin/delete/user/{userId}', 'Admin\\UsersController@deleteUser')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/delete/user/{userId}', 'Admin\\UsersController@deleteUser');
/////////////
    Route::get('admin/orders', 'Admin\\OrdersController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/orders', 'Admin\\OrdersController@index');
//////////////
    Route::get('admin/fast/ord/is/viewed/{id}', 'Admin\\OrdersController@markFastOrder')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/fast/ord/is/viewed/{id}', 'Admin\\OrdersController@markFastOrder');
//////////////
    Route::post('admin/removeGalleryImage', 'Admin\\PublishController@removeGalleryImage');
//////////////
    Route::post('admin/changeOrderStatus', 'Admin\\OrdersController@changeStatus');

///////////////
    Route::get('admin/setting', 'Admin\\SettingController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/setting', 'Admin\\SettingController@index');

    Route::post('admin/setting', 'Admin\\SettingController@save')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/setting', 'Admin\\SettingController@save');

    Route::post('admin/setting/{number}', 'Admin\\SettingController@save')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/setting/{number}', 'Admin\\SettingController@save');

    //////////////////
    Route::get('admin/traffic', 'Admin\\TrafficController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::get('{locale}/admin/traffic', 'Admin\\TrafficController@index');

    Route::post('admin/traffic', 'Admin\\TrafficController@index')->where('locale', implode('|', Config::get('app.locales')));
    Route::post('{locale}/admin/traffic', 'Admin\\TrafficController@index');

});

// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('logout', 'Admin\\UsersController@logout');

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

/* Registration Routes. We dont need it
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);
*/

/*
 * IP2 Location Route Test
 */
Route::get('test', 'IP2Controller@lookup');