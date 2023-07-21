<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lang;
use App\Models\Admin\TrafficModel;
use Config;
use Carbon\Carbon;

class TrafficController extends Controller
{
    protected $trafficModel;

    public function __construct()
    {
        $this->trafficModel = new TrafficModel();
    }
    public function index(Request $request)
    {
        $weekStartDate = $request['start_date'];
        $weekEndDate = $request['end_date'];
        $current_date = $request['current_date'];
        $periodType = $request['period_type'];

        $now = Carbon::now();
//        $weekStartDate = '2021-01-30';
//        $weekEndDate = '2021-01-31';
//        $current_date = '2021-01-15';

        if(!isset($periodType))
            $periodType = 'dayWeek';
        if(!isset($current_date))
            $current_date = $now->format('Y-m-d');
        if(!isset($weekStartDate))
            $weekStartDate = $now->startOfWeek()->format('Y-m-d');
        if(!isset($weekEndDate))
            $weekEndDate = $now->endOfWeek()->format('Y-m-d');
        $result = $this->trafficModel->getStatistic($current_date, $weekStartDate, $weekEndDate, $periodType);

        return view('admin.traffic', [
            'page_title_lang' => Lang::get('admin_pages.traffic'),
            'controller' => $this,
            'locales' => Config::get('app.locales'),
            'currentLocale' => app()->getLocale(),
            'sales' => $result,
            'setting_date' => $current_date,
            'period_type' => $periodType
        ]);
    }
}
