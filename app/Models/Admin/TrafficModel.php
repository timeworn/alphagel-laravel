<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Admin\OrdersModel;

class TrafficModel extends Model
{
    protected $table = 'traffics';
    protected $fillable = ['unique', 'clicks', 'visitors'];

    public function setTraffic($post, $uuid) {
        $today_traffic = $this::whereDate('created_at', Carbon::now()->toDateString())->first();
        if(empty($today_traffic)) {
            $visitors = [];
            $visitors[] = [
                "uuid" => $uuid,
                "count" => 1
            ];
            $this::create([
                'unique' => 1,
                'clicks' => 1,
                'visitors' => serialize($visitors)
            ]);
        }else {
            $visitors = unserialize($today_traffic->visitors);
            $is_same_visitor = false;
            foreach($visitors as $key => $value) {
                if($value['uuid'] === $uuid) {
                    $is_same_visitor = true;
                    $value['count'] = $value['count'] + 1;
                    $visitors[$key] = $value;
                }
            }

            if(!$is_same_visitor) {
                $visitors[] = [
                    "uuid" => $uuid,
                    "count" => 1
                ];
                $today_traffic->unique = $today_traffic->unique + 1;
            }
            $today_traffic->clicks = $today_traffic->clicks + 1;
            $today_traffic->visitors = serialize($visitors);
            $this::where('id', $today_traffic->id)->update([
                'unique' => $today_traffic->unique,
                'clicks' => $today_traffic->clicks,
                'visitors' => $today_traffic->visitors
            ]);
        }
    }

    public function getStatistic($current_date, $weekStartDate, $weekEndDate, $periodType) {
        $sales = null;
        if($periodType === 'dayWeek') {
            $vistors = DB::table('traffics')
            ->whereBetween('created_at', [Carbon::parse($weekStartDate)->toDateTimeString(), Carbon::parse($weekEndDate)->endOfDay()->toDateTimeString()])
                        ->select('*', DB::raw('date(created_at) as date'))
                        ->get()->toArray();

            $sales = DB::table('orders')
                    ->whereBetween('created_at', [Carbon::parse($weekStartDate)->toDateTimeString(), Carbon::parse($weekEndDate)->endOfDay()->toDateTimeString()])
                    ->select([
                        DB::raw('count(*) as total_count'),
                        DB::raw('COALESCE(SUM(amount),0) as total_amount'),
                        DB::raw('COALESCE(SUM(profit),0) as total_profit'),
                        DB::raw('date(created_at) as date'),
                    ])
                    ->groupBy('date')
                    ->get()
                    ->keyBy('date');

            $period = new CarbonPeriod($weekStartDate, '1 day', $weekEndDate);
            foreach ($period as $date) {
                $dateString = $date->toDateString();
                if (!$sales->has($dateString)) {
                    $sales->put($dateString, ['date' => $dateString, 'total_amount' => 0, 'total_profit' => 0]);
                }
            }
            $sales = $sales->values()->toArray();
            foreach($sales as  $key => $sale ) {
                if(is_object($sale)):
                    $sale = (array) $sale;
                    $sales[$key] = (array) $sale;
                endif;
                if(!isset($sale['total_count'])) {
                    $sales[$key]['total_count'] = 0;
                }
                if(!isset($sale['total_amount'])) {
                    $sales[$key]['total_amount'] = 0;
                }
                if(!isset($sale['total_profit'])) {
                    $sale[$key]['total_profit'] = 0;
                }
                $sales[$key]['unique'] = 0;
                $sales[$key]['clicks'] = 0;
                if(!empty($vistors)) {
                    foreach($vistors as $vistior_key => $visitor) {
                        if($sale['date'] == $visitor->date) {
                            $sales[$key]['unique'] = $visitor->unique;
                            $sales[$key]['clicks'] = $visitor->clicks;
                        }
                    }
                }
            }
            $sales = $this->record_sort($sales, "date");
        }else if($periodType === 'dayMonth') {
            $start_date_month = Carbon::parse($current_date)->startOfMonth()->toDateTimeString();
            $end_date_month = Carbon::parse($current_date)->endOfMonth()->toDateTimeString();
            $vistors = DB::table('traffics')
                ->whereBetween('created_at', [$start_date_month, $end_date_month])
                ->select('*', DB::raw('date(created_at) as date'))
                ->get()->toArray();

            $sales = DB::table('orders')
                ->whereBetween('created_at', [$start_date_month, $end_date_month])
                ->select([
                    DB::raw('COALESCE(count(*),0) as total_count'),
                    DB::raw('COALESCE(SUM(amount),0) as total_amount'),
                    DB::raw('COALESCE(SUM(profit),0) as total_profit'),
                    DB::raw('date(created_at) as date'),
                ])
                ->groupBy('date')
                ->get()
                ->keyBy('date');

            $period = new CarbonPeriod(Carbon::parse($current_date)->startOfMonth()->format('Y-m-d'), '1 day', Carbon::parse($current_date)->endOfMonth()->format('Y-m-d'));

            foreach ($period as $date) {
                $dateString = $date->toDateString();
                if (!$sales->has($dateString)) {
                    $sales->put($dateString, ['date' => $dateString, 'total_amount' => 0, 'total_profit' => 0]);
                }
            }
            $sales = $sales->values()->toArray();
            foreach($sales as  $key => $sale ) {
                if(is_object($sale)):
                    $sale = (array) $sale;
                    $sales[$key] = (array) $sale;
                endif;
                if(!isset($sale['total_count'])) {
                    $sales[$key]['total_count'] = 0;
                }
                if(!isset($sale['total_amount'])) {
                    $sales[$key]['total_amount'] = 0;
                }
                if(!isset($sale['total_profit'])) {
                    $sale[$key]['total_profit'] = 0;
                }
                $sales[$key]['unique'] = 0;
                $sales[$key]['clicks'] = 0;
                if(!empty($vistors)) {
                    foreach($vistors as $vistior_key => $visitor) {
                        if($sale['date'] == $visitor->date) {
                            $sales[$key]['unique'] = $visitor->unique;
                            $sales[$key]['clicks'] = $visitor->clicks;
                        }
                    }
                }
            }
            $sales = $this->record_sort($sales, "date");
        }else if($periodType === 'monthYear'){
            $start_date_year = Carbon::parse($current_date)->startOfYear()->toDateTimeString();
            $end_date_year = Carbon::parse($current_date)->endOfYear()->toDateTimeString();
            $vistors = DB::table('traffics')
                ->whereBetween('created_at', [$start_date_year, $end_date_year])
                ->select('*', DB::raw('date(created_at) as date'))
                ->get()->toArray();

            $sales = DB::table('orders')
                ->whereBetween('created_at', [$start_date_year, $end_date_year])
                ->select([
                    DB::raw('COALESCE(count(*),0) as total_count'),
                    DB::raw('COALESCE(SUM(amount),0) as total_amount'),
                    DB::raw('COALESCE(SUM(profit),0) as total_profit'),
                    DB::raw("DATE_FORMAT(created_at, '%Y-%m') date"),
                    DB::raw('YEAR(created_at) year, MONTH(created_at) month')
                ])
                ->groupby('year','month')
                ->get()
                ->keyBy('date');

            $period = new CarbonPeriod(Carbon::parse($current_date)->startOfYear()->format('Y-m'), '1 month', Carbon::parse($current_date)->endOfYear()->format('Y-m'));
            foreach ($period as $date) {
                $dateString = $date->format('Y-m');
                if (!$sales->has($dateString)) {
                    $sales->put($dateString, ['date' => $dateString, 'total_amount' => 0, 'total_profit' => 0]);
                }
            }
            $sales = $sales->values()->toArray();
            foreach($sales as  $key => $sale ) {
                if(is_object($sale)):
                    $sale = (array) $sale;
                    $sales[$key] = (array) $sale;
                endif;
                if(!isset($sale['total_count'])) {
                    $sales[$key]['total_count'] = 0;
                }
                if(!isset($sale['total_amount'])) {
                    $sales[$key]['total_amount'] = 0;
                }
                if(!isset($sale['total_profit'])) {
                    $sale[$key]['total_profit'] = 0;
                }
                $sales[$key]['unique'] = 0;
                $sales[$key]['clicks'] = 0;
                if(!empty($vistors)) {
                    foreach($vistors as $vistior_key => $visitor) {
                        if($sale['date'] == $visitor->date) {
                            $sales[$key]['unique'] = $visitor->unique;
                            $sales[$key]['clicks'] = $visitor->clicks;
                        }
                    }
                }
            }
            $sales = $this->record_sort($sales, "date");
        }
        return $sales;
    }
    function record_sort($records, $field, $reverse=false)
    {
        $hash = array();

        foreach($records as $record)
        {
            $hash[$record[$field]] = $record;
        }

        ($reverse)? krsort($hash) : ksort($hash);

        $records = array();

        foreach($hash as $record)
        {
            $records []= $record;
        }

        return $records;
    }
}
