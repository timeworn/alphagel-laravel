<?php

namespace App\Models\Publics;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Carbon\Carbon;
class CheckoutModel extends Model
{

    private $post;

    public function setOrder($post)
    {
        $this->post = $post;
        if(empty($this->post['order_id'])) {
            $order_id = DB::table('orders')->max('order_id');
            $this->post['order_id'] = $order_id + 1;
            DB::transaction(function () {
                $id = DB::table('orders')->insertGetId([
                    'status' => 1,
                    'order_id' => $this->post['order_id'],
                    'type' => $this->post['payment_type'],
                    'products' => $this->post['product_id'],
                    'created_at' => Carbon::now()
                ]);
                DB::table('orders_clients')->insert([
                    'for_order' => $id,
                    'first_name' => htmlspecialchars(trim($this->post['first_name'])),
                    'last_name' => htmlspecialchars(trim($this->post['last_name'])),
                    'email' => htmlspecialchars(trim($this->post['email'])),
                    'phone' => htmlspecialchars(trim($this->post['phone'])),
                    'address' => htmlspecialchars(trim($this->post['address'])),
                    'city' => htmlspecialchars(trim($this->post['city'])),
                    'post_code' => htmlspecialchars(trim($this->post['post_code'])),
                    'apt' => htmlspecialchars(trim($this->post['apt'])),
                    'country' => htmlspecialchars(trim($this->post['country'])),
                ]);
            });
        }else {
            DB::transaction(function () {
                DB::table('orders')
                    ->where('id', $this->post['order_id'])
                    ->update([
                        'status' => 1,
                        'type' => $this->post['payment_type'],
                        'products' => $this->post['product_id']
                    ]);
                DB::table('orders_clients')
                    ->where('for_order', $this->post['order_id'])
                    ->update([
                        'first_name' => htmlspecialchars(trim($this->post['first_name'])),
                        'last_name' => htmlspecialchars(trim($this->post['last_name'])),
                        'email' => htmlspecialchars(trim($this->post['email'])),
                        'phone' => htmlspecialchars(trim($this->post['phone'])),
                        'address' => htmlspecialchars(trim($this->post['address'])),
                        'city' => htmlspecialchars(trim($this->post['city'])),
                        'post_code' => htmlspecialchars(trim($this->post['post_code'])),
                        'apt' => htmlspecialchars(trim($this->post['apt'])),
                        'country' => htmlspecialchars(trim($this->post['country'])),
                    ]);
            });
        }
    }

    public function setFastOrder($post)
    {
        $this->post = $post;
        $order_id = DB::table('orders')->max('order_id');
        $this->post['order_id'] = $order_id + 1;
        $return = DB::transaction(function () {
            $id = DB::table('orders')->insertGetId([
                'order_id' => $this->post['order_id'],
                'products' => $this->post['product_id'],
                'status' => Config::get('constants.order_status.uncomplete'),
                'created_at' => Carbon::now()
            ]);
            DB::table('orders_clients')->insert([
                'for_order' => $id,
                'first_name' => htmlspecialchars(trim($this->post['first_name'])),
                'last_name' => htmlspecialchars(trim($this->post['last_name'])),
                'email' => htmlspecialchars(trim($this->post['email'])),
            ]);
            return $id;
        });
        return $return;
    }

}
