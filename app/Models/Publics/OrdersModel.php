<?php

namespace App\Models\Publics;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Rule;

class OrdersModel extends Model
{
    protected $fillable = ['created_at', 'updated_at'];
    private $post;
    protected $table = 'orders';

    public function getOrders()
    {
        $products = DB::table('orders')
                ->select(DB::raw('orders.*, orders.id as orderId, orders_clients.*'))
                ->join('orders_clients', 'orders_clients.for_order', '=', 'orders.id')
                ->paginate(10);
        return $products;
    }
    public function getOrder($id)
    {
        $products = DB::table('orders')
            ->select(DB::raw('orders.*, orders.id as orderId, orders_clients.*'))
            ->where('orders.id', '=', $id)
            ->join('orders_clients', 'orders_clients.for_order', '=', 'orders.id')
            ->paginate(10);
        return $products;
    }
    public function getFastOrders()
    {
        $fastOrders = DB::table('fast_orders')
                        ->where('status', 0)
                        ->get()->toArray();
        return $fastOrders;
    }

    public function setNewStatus($post)
    {
        $this->post = $post;
        DB::table('orders')
                ->where('id', $this->post['order_id'])
                ->update([
                    'status' => $this->post['order_value']
        ]);
    }

    public function setFastOrderAsViewed($id)
    {
        DB::table('fast_orders')
                ->where('id', $id)
                ->update([
                    'status' => 1
        ]);
    }

}
