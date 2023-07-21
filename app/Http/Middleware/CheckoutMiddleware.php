<?php

namespace App\Http\Middleware;

use App\Models\Admin\TrafficModel;
use Closure;
use Webpatser\Uuid\Uuid;
use App\Models\Publics\HomeModel;

class CheckoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $trafficModel = new TrafficModel();
        if($request->hasCookie('alpha_uuid')) {
            $uuid = $request->cookie('alpha_uuid');
            $trafficModel->setTraffic($request, $uuid);
            return $next($request);
        }
        $uuid = Uuid::generate();
        $uuid_cookie = cookie('alpha_uuid', $uuid, 1440);
        $trafficModel->setTraffic($request, $request->cookie('alpha_uuid'));
        $response = $next($request);
        return $response->withCookie($uuid_cookie);
    }
}
